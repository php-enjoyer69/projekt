<?php
namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use core\Validator;
use app\forms\RoleEditForm;

class RoleEditCtrl
{

    private $form;
    private $movie; //caretaker-->movie
    private $person; //categoory-->person

    public function __construct()
    {
        $this->form = new RoleEditForm();

        $this->movie=App::getDB()->select("movie", "*", ["ORDER" => "title"]);
        $this->person=App::getDB()->select("person", "*", ["ORDER" => "surname"]);

    }

    public function validateSave()
    {

        $v = new Validator();
        $this->form->is_director = $v->validateFromPost("is_director", [
            'trim' => true,
            'required' => true,
            'required_message' => 'Rola jest wymagana',
            'validator_message' => 'Rola jest wymagana'
        ]);

        return !App::getMessages()->isError();
    }
    public function validateEdit()
    {
        $this->form->id_movie = ParamUtils::getFromCleanURL(1, true, 'Błędne wywołanie aplikacji');
        $this->form->id_person = ParamUtils::getFromCleanURL(2, true, 'Błędne wywołanie aplikacji');
        return !App::getMessages()->isError();
    }

    public function action_roleNew()
    {
        $this->generateView();
    }

    public function action_roleEdit()
    {
        if ($this->validateEdit()) {
            try {
                $this->form->id_movie = ParamUtils::getFromRequest('id_movie');
                $this->form->id_person = ParamUtils::getFromRequest('id_person');

                $record = App::getDB()->get("role", "*", [
                    "id_movie" => $this->form->id_movie,
                    "id_person" => $this->form->id_person
                ]);
                $this->form->is_director = $record['is_director'];
                $this->form->id_movie= $record['id_movie'];
                $this->form->id_person = $record['id_person'];

            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas odczytu rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
        }

        $this->generateView();
    }

    public function action_roleDelete()
    {
        if ($this->validateEdit()) {

            try {
                App::getDB()->delete("role", [
                    "id_movie" => $this->form->id_movie,
                    "id_person" => $this->form->id_person
                ]);
                Utils::addInfoMessage('record deleted');
            } catch (\PDOException $e) {
                Utils::addErrorMessage('unexspected deleting record error');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
        }
        App::getRouter()->redirectTo('movieList');
    }

    public function action_roleSave()
    {

        if ($this->validateSave()) {
            try {
                $this->form->id_movie = ParamUtils::getFromRequest('id_movie');
                $this->form->id_person = ParamUtils::getFromRequest('id_person');
                
                $count = App::getDB()->count("role",[
                    "id_movie" => $this->form->id_movie,
                    "id_person" => $this->form->id_person
                ]);
                if ($count>0 && $this->form->id_movie != '' && $this->form->id_person != ''){ 
                    App::getDB()->update("role", [
                        "is_director" => $this->form->is_director,
                    ],[
                        "AND" => [
                            "id_person" => $this->form->id_person,
                            "id_movie" => $this->form->id_movie,
                        ]
                    ]); 
                }
                else if ($count==0) {
                    App::getDB()->insert("role", [
                        "is_director" => $this->form->is_director,
                        "id_movie" => $this->form->id_movie,
                        "id_person" => $this->form->id_person
                    ]);

                } else {

                    throw new \PDOException('unexpected saving record error');
                }
                Utils::addInfoMessage('record saved');
            } catch (\PDOException $e) {
                Utils::addErrorMessage('unexpected saving record error');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }

            App::getRouter()->forwardTo('movieList');
        } else {
            $this->generateView();
        }
    }

    public function generateView()
    {
        App::getSmarty()->assign('form', $this->form);
        App::getSmarty()->assign('movie', $this->movie);
        App::getSmarty()->assign('person', $this->person);
        App::getSmarty()->display('RoleEdit.tpl');
    }

}