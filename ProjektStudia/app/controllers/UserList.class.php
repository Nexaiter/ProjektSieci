<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use app\forms\LoginForm;
use core\Validator;

class UserList {

    public $records;
    public function action_userList()
    {
        
        try{
			$this->records = App::getDB()->select("user", [
                "login",
                "password",
                "permission",
				]);
		} catch (PDOException $e){
			Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
		}	
       
            $this->generateView();
        
}
    public function generateView() {
      //  App::getSmarty()->assign('searchForm', $this->form); // dane formularza (wyszukiwania w tym wypadku)
        App::getSmarty()->assign('user', $this->records);  // lista rekordów z bazy danych
        App::getSmarty()->display('UserListView.tpl');
    }




}