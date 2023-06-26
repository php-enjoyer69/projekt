<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use app\forms\MovieEditForm;

class AnimalEditCtrl {

    private $form; //dane formularza

    public function __construct() {
        //stworzenie potrzebnych obiektów
        $this->form = new MovieEditForm();
    }

    // Walidacja danych przed zapisem (nowe dane lub edycja).
    public function validateSave() {
        //0. Pobranie parametrów z walidacją
        $this->form->id_movie = ParamUtils::getFromRequest('id_movie', true, 'Błędne wywołanie aplikacji');
        $this->form->title = ParamUtils::getFromRequest('title', true, 'Błędne wywołanie aplikacji');
        $this->form->year = ParamUtils::getFromRequest('year', true, 'Błędne wywołanie aplikacji');
        $this->form->description = ParamUtils::getFromRequest('description', true, 'Błędne wywołanie aplikacji');

        if (App::getMessages()->isError())
            return false;

        // 1. sprawdzenie czy wartości wymagane nie są puste
        if (empty(trim($this->form->id_movie))) {
            Utils::addErrorMessage('insert id');
        }
        if (empty(trim($this->form->title))) {
            Utils::addErrorMessage('insert movie title');
        }
        if (empty(trim($this->form->year))) {
            Utils::addErrorMessage('insert year of the movie');
        }
        if (empty(trim($this->form->description))) {
            Utils::addErrorMessage('movie description cannot be empty');
        }

        if (App::getMessages()->isError())
            return false;

        // 2. sprawdzenie poprawności przekazanych parametrów

        $d = \DateTime::createFromFormat('Y', $this->form->year);
        if ($d === false) {
            Utils::addErrorMessage('wrong data format! year only. example: 2001');
        }

        return !App::getMessages()->isError();
    }

    //validacja danych przed wyswietleniem do edycji
    public function validateEdit() {
        //pobierz parametry na potrzeby wyswietlenia danych do edycji
        //z widoku listy osób (parametr jest wymagany)
        $this->form->id_movie = ParamUtils::getFromCleanURL(1, true, 'Błędne wywołanie aplikacji');
        return !App::getMessages()->isError();
    }

    public function action_movieNew() {
        $this->generateView();
    }

    //wysiweltenie rekordu do edycji wskazanego parametrem 'id'
    public function action_movieEdit() {
        // 1. walidacja id osoby do edycji
        if ($this->validateEdit()) {
            try {
                // 2. odczyt z bazy danych osoby o podanym ID (tylko jednego rekordu)
                $record = App::getDB()->get("movie", "*", [
                    "id_movie" => $this->form->id_movie
                ]);
                // 2.1 jeśli osoba istnieje to wpisz dane do obiektu formularza
                $this->form->id_movie = $record['id_movie'];
                $this->form->title= $record['title'];
                $this->form->year = $record['year'];
                $this->form->description = $record['description'];

            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas odczytu rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
        }

        // 3. Wygenerowanie widoku
        $this->generateView();
    }

    public function action_movieDelete() {
        // 1. walidacja id osoby do usuniecia
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

        // 3. Przekierowanie na stronę listy osób
        App::getRouter()->forwardTo('MovieList');
    }

    public function action_movieSave() {

        // 1. Walidacja danych formularza (z pobraniem)
        if ($this->validateSave()) {
            // 2. Zapis danych w bazie
            try {

                //2.1 Nowy rekord
                if ($this->form->id_movie == '') {
                    //sprawdź liczebność rekordów - nie pozwalaj przekroczyć 20
                    $count = App::getDB()->count("movie");
                    if ($count <= 100) {
                        App::getDB()->insert("movie", [
                            "id_movie" => $this->form->id_movie,
                            "title" => $this->form->title,
                            "year" => $this->form->year,
                            "description" => $this->form->description,
                        ]);
                    } else { //za dużo rekordów
                        // Gdy za dużo rekordów to pozostań na stronie
                        Utils::addInfoMessage('limit: too much records(>100) to add new record you have to delete another');
                        $this->generateView(); //pozostań na stronie edycji
                        exit(); //zakończ przetwarzanie, aby nie dodać wiadomości o pomyślnym zapisie danych
                    }
                } else {
                    //2.2 Edycja rekordu o danym ID
                    App::getDB()->update("movie", [
                        "title" => $this->form->title,
                        "year" => $this->form->year,
                        "description" => $this->form->description
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

            // 3b. Po zapisie przejdź na stronę listy osób (w ramach tego samego żądania http)
            App::getRouter()->forwardTo('MovieList');
        } else {
            // 3c. Gdy błąd walidacji to pozostań na stronie
            $this->generateView();
        }
    }

    public function generateView() {
        App::getSmarty()->assign('form', $this->form); // dane formularza dla widoku
        App::getSmarty()->display('MovieEdit.tpl');
    }

}
