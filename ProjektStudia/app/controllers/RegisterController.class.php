<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use app\forms\LoginForm;
use core\Validator;

class RegisterController {

    private $form;

    public function __construct() {
        //stworzenie potrzebnych obiektów
        $this->form = new LoginForm();
    }

    public function validateUser() {
        $this->form->login = ParamUtils::getFromRequest('login');
        $this->form->pass = ParamUtils::getFromRequest('password');
    
        if (App::getMessages()->isError())
            return false;
    
        // Sprawdzenie czy wartości wymagane nie są puste
        if (empty(trim($this->form->login))) {
            Utils::addErrorMessage('Wprowadź login');
        }
        if (empty(trim($this->form->pass))) {
            Utils::addErrorMessage('Wprowadź hasło');
        }
    
        if (!App::getMessages()->isError()) {
            // Sprawdzenie czy podany login już istnieje w bazie danych
            $exists = App::getDB()->has("user", [
                "login" => $this->form->login
            ]);
    
            if ($exists) {
                Utils::addErrorMessage('Podany login jest już zajęty');
            }
        }
    
        return !App::getMessages()->isError();
    }


    public function action_registerShow(){
        $this->generateView();

    }

    public function action_register()
    {
        if ($this->validateUser()) {
        try {
            App::getDB()->insert("user", [
                "login" => $this->form->login,
                "password" => $this->form->pass,
                //"permission" => $this->form->permission,
            ]);
            Utils::addErrorMessage('Pomyślnie zarejestrowano');
            App::getRouter()->redirectTo('login');
        }
        catch (PDOException $e) {
            Utils::addErrorMessage('Wystąpił nieoczekiwany błąd podczas zapisu rekordu');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }
    }
            $this->generateView();       
}

    public function generateView() {
        App::getSmarty()->assign('form', $this->form);
        App::getSmarty()->display('RegisterViewTemp.tpl');
    }    
}