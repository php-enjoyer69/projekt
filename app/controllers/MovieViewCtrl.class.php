<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use app\forms\MovieEditForm;

class MovieViewCtrl
{  

    private $record;
    private $form; //rekordy pobrane z bazy danych

    public function __construct()
    {
        $this->form = new MovieEditForm();
    }

    public function action_movieView()
    {

        $this->form->id_movie = ParamUtils::getFromCleanURL(1, true, 'Błędne wywołanie aplikacji');

            try {
                $this->record = App::getDB()->get("movie", [
                    "title",
                    "year",
                    "description",
                    "cover",
                    "starring"
                ], [
                    "id_movie" => $this->form->id_movie
                ]);
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }
        // 4. wygeneruj widok

        App::getSmarty()->assign('movie', $this->record); // lista rekordów z bazy danych
        App::getSmarty()->display('MovieView.tpl');
    }

}