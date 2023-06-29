<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use app\forms\GameForm;
use core\Validator;

class GameListController {

    public $records;

    public function action_gameListShow(){
        $this->action_gameList();
    }
    
    public function action_gameList()
    {        
        try{
			$this->records = App::getDB()->select("game",[
                "name",
                "description",
                "price",
                "image",
				]);
		} catch (PDOException $e){
			Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
		}	       
            $this->generateView();            
        }
  
    
    public function generateView() {
        // App::getSmarty()->assign('form', $this->form);
        App::getSmarty()->assign('game', $this->records);
        App::getSmarty()->display('GameListView.tpl');
    }
}