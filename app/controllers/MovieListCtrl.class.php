<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use app\forms\MovieSearchForm;

class MovieListCtrl
{ 
    private $records; //rekordy pobrane z bazy danych

    public function action_movieList(){


        try {
            $this->records = App::getDB()->select("movie", "*");
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }
        // 4. wygeneruj widok

        App::getSmarty()->assign('movie', $this->records); // lista rekordów z bazy danych
        App::getSmarty()->display('MovieList.tpl');

}
}