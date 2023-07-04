<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use app\forms\PersonEditForm;

class PersonViewCtrl
{  

    private $record;
    private $form; //rekordy pobrane z bazy danych

    public function __construct()
    {
        $this->form = new PersonEditForm();
    }

    public function action_personView()
    {

        $this->form->id_person = ParamUtils::getFromCleanURL(1, true, 'Błędne wywołanie aplikacji');

            try {
                $this->record = App::getDB()->get("person", [
                    "name",
                    "surname",
                    "birthyear",
                    "portrait",
                    "person_role",
                    "starred_in"
                ], [
                    "id_person" => $this->form->id_person
                ]);
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }
        // 4. wygeneruj widok

        App::getSmarty()->assign('person', $this->record); // lista rekordów z bazy danych
        App::getSmarty()->display('PersonView.tpl');
    }

}