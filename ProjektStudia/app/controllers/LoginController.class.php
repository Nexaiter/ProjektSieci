<?php

namespace app\controllers;

use core\App;
use app\forms\LoginForm;
use core\ParamUtils;
use core\Validator;

class LoginController {
    
    private $form;
    

    //stworzenie potrzebnych obiektów
    public function __construct(){
        $this->form = new LoginForm();
    }

    //pobieranie parametrów
    public function getParams(){
      
      $login = ParamUtils::getFromRequest("login", true, "No login given");
      $password = ParamUtils::getFromRequest("password", true, "No password given");
    }

    public function validate(){
        $v = new Validator();
        $login = $v->validateFromRequest("login",[
            'trim' => true,
            'required' => true,
            'required_message' => 'Login is required',
            'min_length' => 3,
            'max_length' => 20,
            'validator_message' => 'Login has to be between 3 to 20 signs', 
        ]);
        $password = $v->validateFromRequest("password",[
            'trim' => true,
            'required' => true,
            'required_message' => 'Password is required',
            'min_length' => 3,
            'max_length' => 20,
            'validator_message' => 'Password has to be between 3 to 20 signs', 
        ]); 
    }








    public function action_login() {
		        

        App::getSmarty()->display("Login.tpl");
        
    }

    public function action_logout()
    {
        
    }

    public function action_register()
    {
        $this->getParams();

        if($this->validate()){
            try{
                getDB()->insert("user",[
                    "login" => $this->form->login,
                    "password" => $this->form->password,
                  //  "permission" => $this->form->"login",
                ]);
                getMessages()->addInfo('Successfully registered');
            }
            catch (PDOException $e){
                getMessages()->addError('Register error');
                if (getConf()->debug) getMessages()->addError($e->getMessage());			
            }
            forwardTo('LoginController');
        }
        else{
            $this->generateView();
        }
    }
    public $records;
    public function action_registeredUserList(){
        try{
            $this->record = getDB()->select("user",[
                "login",
                "password",                
            ]);
        }
        catch (PDOException $e){
			getMessages()->addError('record error');
			if (getConf()->debug) getMessages()->addError($e->getMessage());			
		}	

        getSmarty()->assign('users', $this->records);
        getSmarty()->display('Register.tpl');
    }

    public function generateView(){
        getSmarty()->assign('page_title','Register');
        getSmarty()->assign('form',$this->form);
        getSmarty()->assign('result',$this->result);
    }
}