<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;

class PersonListCtrl
{
    private $records; //rekordy pobrane z bazy danych

    public function action_PersonList()
    {


        try {
            $this->records = App::getDB()->select("person", "*");
        //  $this->records = App::getDB()->select("role", "*");
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }
        // 4. wygeneruj widok

        App::getSmarty()->assign('person', $this->records); // lista rekordów z bazy danych
        App::getSmarty()->display('PersonList.tpl');
    }

}