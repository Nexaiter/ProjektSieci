<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('shopMainShow'); #default action
//App::getRouter()->setLoginRoute('login'); #action to forward if no permissions

Utils::addRoute('hello', 'HelloCtrl');

Utils::addRoute('loginShow',     'LoginController');
Utils::addRoute('registerShow',  'RegisterController');
Utils::addRoute('shopMainShow',  'ShopMainController');
Utils::addRoute('addProductShow',  'AddProductController');
Utils::addRoute('gameListShow',  'GameListController');
Utils::addRoute('editProductShow',  'EditProductController');
Utils::addRoute('gameSearch',  'GameSearchController');

Utils::addRoute('login',         'LoginController');
Utils::addRoute('logout',        'LoginController');
Utils::addRoute('register',      'RegisterController');
Utils::addRoute('userList',      'UserList');
Utils::addRoute('addGame',      'AddProductController');

Utils::addRoute('gameList',      'GameListController');
Utils::addRoute('editList',      'EditProductController');
Utils::addRoute('gameEdit',      'EditProductController');
Utils::addRoute('gameDelete',     'EditProductController');
Utils::addRoute('gameSave',     'EditProductController');
//Utils::addRoute('action_name', 'controller_class_name');