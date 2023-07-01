<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use app\forms\GameSearchForm;
use PDOException;
use core\Validator;

class GameSearchController {

    private $form;
	private $records;

	public function __construct(){
		$this->form = new GameSearchForm();
	}

    public function validate() {
		$this->form->name = ParamUtils::getFromRequest('name');
		return ! App::getMessages()->isError();
	}

    public function action_gameSearch(){

        $this->validate();

        $search_params = [];
        if ( isset($this->form->name) && strlen($this->form->name) > 0) {
			$search_params['name[~]'] = $this->form->name.'%'; 
		}

        $num_params = sizeof($search_params);
		if ($num_params > 1) {
			$where = [ "AND" => &$search_params ];
		} else {
			$where = &$search_params;
		}

        $where ["ORDER"] = "name";

        try{
			$this->records = App::getDB()->select("game", [
					"id",
					"name",
                    "description",
					"price",
                    "image",
				], $where );
		} catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }	

        App::getSmarty()->assign('searchForm',$this->form); // dane formularza (wyszukiwania w tym wypadku)
		App::getSmarty()->assign('game',$this->records);  // lista rekordów z bazy danych
		App::getSmarty()->display('GameListView.tpl');
    }


}