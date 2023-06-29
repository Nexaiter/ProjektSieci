<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use app\forms\GameForm;
use core\Validator;

class AddProductController {

    private $form;

    public function action_addProductShow(){
        $this->generateView();
    }
    
    public function __construct() {
        $this->form = new GameForm();
    }

    public function validateGame(){

        $this->form->name = ParamUtils::getFromRequest('name');
        $this->form->description = ParamUtils::getFromRequest('description');
        $this->form->price = ParamUtils::getFromRequest('price');
        $this->form->image = ParamUtils::getFromRequest('image');

        if (App::getMessages()->isError())
            return false;

        if (empty(trim($this->form->name))) {
            Utils::addErrorMessage('Wprowadź nazwę gry');
        }
        if (empty(trim($this->form->description))) {
            Utils::addErrorMessage('Wprowadź opis gierki');
        }
        if (empty(trim($this->form->price))) {
            Utils::addErrorMessage('Wpisz cenę gry');
        }
        if (empty(trim($this->form->image))) {
            Utils::addErrorMessage('Wprowadź nazwe obrazka .png');
        }
        if (App::getMessages()->isError())
            return false;

        return !App::getMessages()->isError();       
    }

    public function action_addGame()
    {
        if ($this->validateGame()) {
        try {
            App::getDB()->insert("game", [
                "name" => $this->form->name,
                "description" => $this->form->description,
                "price" => $this->form->price,
                "image" => $this->form->image,
            ]);
            Utils::addErrorMessage('Pomyślnie dodano grę do systemu');
        
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
        App::getSmarty()->display('AddProductView.tpl');
    }
}