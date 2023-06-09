<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use app\forms\LoginForm;
use core\SessionUtils;

class LoginController {

    private $record;
    private $form;

    public function __construct() {
        //stworzenie potrzebnych obiektów
        $this->form = new LoginForm();
    }

    public function validate() {
        $this->form->login = ParamUtils::getFromRequest('login');
        $this->form->pass = ParamUtils::getFromRequest('pass');

        //nie ma sensu walidować dalej, gdy brak parametrów
        if (!isset($this->form->login))
            return false;

        // sprawdzenie, czy potrzebne wartości zostały przekazane
        if (empty($this->form->login)) {
            Utils::addErrorMessage('Nie podano loginu');
        }
        if (empty($this->form->pass)) {
            Utils::addErrorMessage('Nie podano hasła');
        }
        $login = $this->form->login;
        $pass = $this->form->pass;
        //nie ma sensu walidować dalej, gdy brak wartości
        if (App::getMessages()->isError()){
            return false;
        }
            try {
                $this->record = App::getDB()->select("user", [
                    "id",
                    "login",
                    "password",
                    "permission"
                ], [
                    "AND" => [
                        "login" => $login,
                        "password" => $pass
                    ]
                ]);
            } catch (PDOException $e){
                Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
                    
            }	
            if (empty($this->record)){
                Utils::addErrorMessage('Niepoprawny login lub hasło');
            }else{
                // RoleUtils::addRole($record["permission"]);
                RoleUtils::addRole($this->record[0]["permission"]);
                Utils::addInfoMessage($this->record[0]["permission"]);
            }
            
        return !App::getMessages()->isError();
    }

    public function action_loginShow() {
        $this->generateView();
    }

    public function action_login() {
        if ($this->validate()) {
            //zalogowany => przekieruj na główną akcję (z przekazaniem messages przez sesję)
            SessionUtils::store("userID", $this->record[0]["id"]);
            Utils::addErrorMessage('Poprawnie zalogowano do systemu');
            Utils::addInfoMessage($this->record[0]["id"]);
            App::getRouter()->forwardTo("shopMainShow");
        } else {
            //niezalogowany => pozostań na stronie logowania
            $this->generateView();
        }
    }

    public function action_logout() {
        // 1. zakończenie sesji
        session_destroy();
        // 2. idź na stronę główną - system automatycznie przekieruje do strony logowania
        App::getRouter()->redirectTo('shopMainShow');
    }

    public function generateView() {
        App::getSmarty()->assign('form', $this->form); // dane formularza do widoku
        App::getSmarty()->display('LoginViewTemp.tpl');
    }

}
