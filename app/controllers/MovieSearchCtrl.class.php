<?php
namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use app\forms\MovieSearchForm;
use PDOException;
use core\Validator;

class MovieSearchCtrl {

    private $form;
	private $records;

	public function __construct(){
		$this->form = new MovieSearchForm();
	}

    public function validate() {
		$this->form->title = ParamUtils::getFromRequest('title');
		return ! App::getMessages()->isError();
	}

    public function action_movieSearch(){

        $this->validate();

        $search_params = [];
        if ( isset($this->form->title) && strlen($this->form->title) > 0) {
			$search_params['title[~]'] = $this->form->title.'%'; 
		}

        $num_params = sizeof($search_params);
		if ($num_params > 1) {
			$where = [ "AND" => &$search_params ];
		} else {
			$where = &$search_params;
		}

        $where ["ORDER"] = "title";

        try{
			$this->records = App::getDB()->select("movie", [
					"id_movie",
					"title",
                    "year",
					"description",
                    "cover",
					"starring",
				], $where );
		} catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }	

        App::getSmarty()->assign('searchForm',$this->form); // dane formularza (wyszukiwania w tym wypadku)
		App::getSmarty()->assign('movie',$this->records);  // lista rekordów z bazy danych
		App::getSmarty()->display('MovieList.tpl');
    }


}