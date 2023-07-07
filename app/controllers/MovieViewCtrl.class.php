<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use app\forms\MovieEditForm;
use app\forms\MovieSearchForm;

class MovieViewCtrl
{  
    private $records;
    private $cast;
    private $form; //rekordy pobrane z bazy danych

    public function __construct()
    {
        $this->form = new MovieEditForm();
    }

    public function action_movieView()
    {

        $this->form->id_movie = ParamUtils::getFromCleanURL(1, true, 'Błędne wywołanie aplikacji');

            try {

             $where = ["role.id_movie" => $this->form->id_movie];
             $where ["ORDER"]= [
                
                "is_director" => "DESC",
                "surname"
             ];

                $this->records = App::getDB()->get("movie", "*", ["id_movie" => $this->form->id_movie]);

                $this->cast= App::getDB()->select('role', [
                    '[><]person' => ['role.id_person' => 'id_person']
                ], [
                    "role.is_director",
                    "person.name",
                    "person.surname",
                    "person.id_person"
                ],$where); 

                
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage()); } 

            
        
        // 4. wygeneruj widok

        App::getSmarty()->assign('cast', $this->cast); // lista rekordów z bazy danych
        App::getSmarty()->assign('movie', $this->records); // lista rekordów z bazy danych
        App::getSmarty()->display('MovieView.tpl');
    }

}
