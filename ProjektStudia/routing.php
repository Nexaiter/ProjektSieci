<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('hello'); #default action
//App::getRouter()->setLoginRoute('login'); #action to forward if no permissions

Utils::addRoute('hello', 'HelloCtrl');

//logowanie
Utils::addRoute('login', 'LoginController');
Utils::addRoute('logout', 'LoginController', ['user','admin']);
Utils::addRoute('register', 'LoginController');

Utils::addRoute('nowa', 'NowyKontroler');
