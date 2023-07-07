<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use app\forms\PersonEditForm;

class PersonViewCtrl
{  
    private $cast;
    private $records;
    private $form; //rekordy pobrane z bazy danych

    public function __construct()
    {
        $this->form = new PersonEditForm();
    }

    public function action_personView()
    {

                $this->form->id_person = ParamUtils::getFromCleanURL(1, true, 'Błędne wywołanie aplikacji');

                try {
    
                 $where = ["role.id_person" => $this->form->id_person];
    
                    $this->records = App::getDB()->get("person", "*", ["id_person" => $this->form->id_person]);
    
                    $this->cast= App::getDB()->select('role', [
                        '[><]movie' => ['role.id_movie' => 'id_movie']
                    ], [
                        "role.is_director",
                        "movie.title",
                        "movie.year",
                        "movie.id_movie"
                        
                    ],$where); 

        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }
        // 4. wygeneruj widok
        App::getSmarty()->assign('cast', $this->cast);
        App::getSmarty()->assign('person', $this->records); // lista rekordów z bazy danych
        App::getSmarty()->display('PersonView.tpl');
    }

}