<?php
namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use core\Validator;
use app\forms\PersonEditForm;

class PersonEditCtrl

{
    private $form;
    public function __construct()

    {
        $this->form = new PersonEditForm();
    }

    public function validateSave()

    {
        $this->form->id_person = ParamUtils::getFromPost('id_person', true, 'Błędne wywołanie aplikacji');

        $v = new Validator();

        $this->form->name = $v->validateFromPost("name", [
            'trim' => true,
            'required' => true,
            'required_message' => 'Imię jest wymagane',
            'validator_message' => 'Imię jest wymagane'

        ]);

        $v = new Validator();

        $this->form->surname = $v->validateFromPost("surname", [
            'trim' => true,
            'required' => true,
            'required_message' => 'Nazwisko jest wymagane',
            'validator_message' => 'Nazwisko jest wymagane'

        ]);

        $this->form->portrait = $v->validateFromPost("portrait", [
            'trim' => true,
            'required' => true,
            'required_message' => 'Nazwisko jest wymagane',
            'validator_message' => 'Nazwisko jest wymagane'

        ]);
    

        $date = $v->validateFromPost('birthyear', [
            'trim' => true,
            'required' => true,
            'required_message' => "Wprowadź datę",
            'date_format' => 'Y',
            'validator_message' => "Niepoprawny format daty."

        ]);

        if ($v->isLastOK()) {
            $this->form->birthyear = $date->format('Y');
        }
        return !App::getMessages()->isError();

    }
    public function validateEdit()

    {
        $this->form->id_person = ParamUtils::getFromCleanURL(1, true, 'Błędne wywołanie aplikacji');
        return !App::getMessages()->isError();

    }

    public function action_personNew()

    {
        $this->generateView();
    }

    public function action_personEdit()

    {
        if ($this->validateEdit()) {

            try {
                $record = App::getDB()->get("person", "*", [
                    "id_person" => $this->form->id_person
                ]);

                $this->form->id_person = $record['id_person'];
                $this->form->name = $record['name'];
                $this->form->surname = $record['surname'];
                $this->form->birthyear = $record['birthyear'];
                $this->form->portrait = $record['portrait'];

            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas odczytu rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }

        }

        $this->generateView();

    }

    public function action_personDelete()

    {
        if ($this->validateEdit()) {

            try {

                App::getDB()->delete("person", [
                    "id_person" => $this->form->id_person
                ]);

                Utils::addInfoMessage('record deleted');

            } catch (\PDOException $e) {
                Utils::addErrorMessage('unexspected deleting record error');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());

            }

        }

        App::getRouter()->redirectTo('personList');

    }

    public function action_personSave()

    {

        if ($this->validateSave()) {

            try {

                if ($this->form->id_person == '') {

                    App::getDB()->insert("person", [
                        "id_person" => $this->form->id_person,
                        "name" => $this->form->name,
                        "surname" => $this->form->surname,
                        "birthyear" => $this->form->birthyear,
                        "portrait" => $this->form->portrait,

                    ]);

                } else {

                    App::getDB()->update("person", [
                        "name" => $this->form->name,
                        "surname" => $this->form->surname,
                        "birthyear" => $this->form->birthyear,
                        "portrait" => $this->form->portrait,
                    ], [
                        "id_person" => $this->form->id_person
                    ]);

                }

                Utils::addInfoMessage('record saved');

            } catch (\PDOException $e) {
                Utils::addErrorMessage('unexpected saving record error');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());

            }

            App::getRouter()->forwardTo('personList');

        } else {
            $this->generateView();
        }

    }

    public function generateView()

    {

        App::getSmarty()->assign('form', $this->form);
        App::getSmarty()->display('PersonEdit.tpl');

    }




}