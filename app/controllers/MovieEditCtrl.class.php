<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use core\Validator;
use app\forms\MovieEditForm;

class MovieEditCtrl
{

    private $form; //dane formularza

    public function __construct()
    {
        $this->form = new MovieEditForm();
    }

    public function validateSave()
    {
        $this->form->id_movie = ParamUtils::getFromPost('id_movie', true, 'Błędne wywołanie aplikacji');

        $v = new Validator();
        $this->form->title = $v->validateFromPost("title", [
            'trim' => true,
            'required' => true,
            'required_message' => 'Tytuł jest wymagany',
            'validator_message' => 'Tytuł jest wymagany'
        ]);
        
        $date = $v->validateFromPost('year', [
            'trim' => true,
            'required' => true,
            'required_message' => "Wprowadź rok",
            'date_format' => 'Y',
            'validator_message' => "Niepoprawny format daty. Przykład: 2137"
        ]);

        if ($v->isLastOK()) {
            $this->form->year = $date->format('Y');

        $v = new Validator();
        $this->form->description = $v->validateFromPost("description", [
            'trim' => true,
            'required' => true,
            'required_message' => 'Opis jest wymagany',
            'validator_message' => 'Opis jest wymagany'
        ]);

        $v = new Validator();
        $this->form->cover = $v->validateFromPost("cover", [
            'trim' => true,
            'required' => true,
            'required_message' => 'Obrazek jest wymagany',
            'validator_message' => 'Obrazek jest wymagany'
        ]);
        }
        return !App::getMessages()->isError();
    }
    public function validateEdit()
    {
        $this->form->id_movie = ParamUtils::getFromCleanURL(1, true, 'Błędne wywołanie aplikacji 2');
        return !App::getMessages()->isError();
    }

    public function action_movieNew()
    {
        $this->generateView();
    }

    public function action_movieEdit()
    {
        if ($this->validateEdit()) {
            try {
                $record = App::getDB()->get("movie", "*", [
                    "id_movie" => $this->form->id_movie
                ]);
                $this->form->id_movie = $record['id_movie'];
                $this->form->title = $record['title'];
                $this->form->year = $record['year'];
                $this->form->description = $record['description'];
                $this->form->cover = $record['cover'];

            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas odczytu rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
        }

        $this->generateView();
    }

    public function action_movieDelete()
    {
        if ($this->validateEdit()) {

            try {
                // 2. usunięcie rekordu
                App::getDB()->delete("movie", [
                    "id_movie" => $this->form->id_movie
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

    public function action_movieSave()
    {

        if ($this->validateSave()) {
            try {

                if ($this->form->id_movie == '') {
                    App::getDB()->insert("movie", [
                        "id_movie" => $this->form->id_movie,
                        "title" => $this->form->title,
                        "year" => $this->form->year,
                        "description" => $this->form->description,
                        "cover" => $this->form->cover,
                    ]);

                } else {
                    App::getDB()->update("movie", [
                        "title" => $this->form->title,
                        "year" => $this->form->year,
                        "description" => $this->form->description,
                        "cover" => $this->form->cover
                    ], [
                        "id_movie" => $this->form->id_movie
                    ]);
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
        App::getSmarty()->display('MovieEdit.tpl');
    }

}