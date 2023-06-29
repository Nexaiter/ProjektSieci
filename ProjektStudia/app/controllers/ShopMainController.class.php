<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use app\forms\LoginForm;
use core\Validator;

class ShopMainController {



    public function action_shopMainShow(){

        $this->generateView();

    }


    public function generateView() {
        // App::getSmarty()->assign('form', $this->form);
        App::getSmarty()->display('ShopMainView.tpl');
    }
}