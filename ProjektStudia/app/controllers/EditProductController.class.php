<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use app\forms\GameForm;
use core\Validator;

class EditProductController {

    private $form;
    private $records;
    
    public function action_editProductShow(){
        $this->action_editList();
    }

    public function __construct() {
        //stworzenie potrzebnych obiektów
        $this->form = new GameForm();
    }

    public function validateEdit() {
        $this->form->id = ParamUtils::getFromCleanURL(1, true, 'Błędne wywołanie aplikacji');
        return !App::getMessages()->isError();
    }

    public function action_editList()
    {        
        try{
			$this->records = App::getDB()->select("game",[
                "id",
                "name",
                "price",
				]);
		} catch (PDOException $e){
			Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
		}	       
            $this->generateView();            
        }
 
      

    public function action_gameEdit() {
        if ($this->validateEdit()) {
            try {
                $record = App::getDB()->get("game", "*", [
                    "id" => $this->form->id
                ]);
                // 2.1 jeśli osoba istnieje to wpisz dane do obiektu formularza
                $this->form->name = $record['name'];
                $this->form->price = $record['price'];
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas odczytu rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
        }

        // 3. Wygenerowanie widoku
        $this->generateView();
    }

    public function action_gameDelete() {
        if ($this->validateEdit()) {
            try {
                App::getDB()->delete("game", [
                    "id" => $this->form->id
                ]);
                Utils::addInfoMessage('Pomyślnie usunięto rekord');
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas usuwania rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
        }

        // 3. Przekierowanie na stronę listy osób
        App::getRouter()->forwardTo('editList');
    }


      
    public function generateView() {
        App::getSmarty()->assign('form', $this->form);
        App::getSmarty()->assign('game', $this->records);
        App::getSmarty()->display('EditProductView.tpl');
    }
}

    
