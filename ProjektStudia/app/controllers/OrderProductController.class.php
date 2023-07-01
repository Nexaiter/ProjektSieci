<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use app\forms\GameForm;
use core\Validator;
use core\SessionUtils;

class OrderProductController {
    private int $gameID;
    private $records;
    private $sum = 0;

    public function validateGameId() {
        $this->gameID = ParamUtils::getFromCleanURL(1, true, 'Błędne wywołanie aplikacji');
        return !App::getMessages()->isError();
    }

    public function action_createOrder(){

        if($this->validateGameId()) {
            $userID = SessionUtils::load("userID", $keep = true);
            $gameOrder = App::getDB()->get('gameorder', '*', ['gameID' => $this->gameID]);

            
            try {
                if ($gameOrder) {
                    // Jeśli istnieje już zamówienie dla danej gry, wykonaj update
                    App::getDB()->update('gameorder', ['amount[+]' => 1], ['gameID' => $this->gameID]);
                } else {
                    // Jeśli nie istnieje zamówienie dla danej gry, wykonaj insert
                    App::getDB()->insert('gameorder', ['userID' => $userID, 'gameID' => $this->gameID, 'amount' => 1]);
                }
    
                Utils::addInfoMessage('Pomyślnie utworzono/zaktualizowano zamówienie');
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas tworzenia/zaktualizowania zamówienia');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
        
            App::getRouter()->forwardTo('gameListShow');
    
        }
    }
 
    public function action_showOrder(){

        $userID = SessionUtils::load("userID", $keep = true);
        try{
			$this->records = App::getDB()->select('gameorder', [
                '[><]game' => ['gameorder.gameID' => 'id']
            ], [
                'gameorder.id',
                'game.name',
                'game.price',
                'gameorder.amount'
            ], [
                'gameorder.userID' => $userID
            ]);
            foreach($this->records as $record){
                $this->sum += $record["amount"] * $record["price"];
            }
		} catch (PDOException $e){
			Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
		}	       
            $this->generateView();           
        }

        public function action_removeOrder(){
            $orderID = ParamUtils::getFromCleanURL(1, true, 'Błędne wywołanie aplikacji');
            try {
                $amount = App::getDB()->get('gameorder', 'amount', ['id' => $orderID]);
        
                if ($amount <= 1) {
                    App::getDB()->delete('gameorder', ['id' => $orderID]);
                } else {
                    App::getDB()->update('gameorder', ['amount[-]' => 1], ['id' => $orderID]);
                }
        
                Utils::addInfoMessage('Pomyślnie zmniejszono ilość zamówienia');
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas zmniejszania ilości zamówienia');
                if (App::getConf()->debug) {
                    Utils::addErrorMessage($e->getMessage());
                }
            }
        
            App::getRouter()->redirectTo('showOrder');           
            }
            
        public function action_buyOrder(){
            $userID = SessionUtils::load("userID", $keep = true);
            try {
                App::getDB()->delete('gameorder', ['userID' => $userID]);
                
                Utils::addInfoMessage('Pomyślnie dokonano transakcji');
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas dokonywania transakcji');
                if (App::getConf()->debug) {
                    Utils::addErrorMessage($e->getMessage());
                }
            }
            
            App::getRouter()->redirectTo('showOrder');
        }

    public function generateView() {
        App::getSmarty()->assign('gameOrder', $this->records);
        App::getSmarty()->assign('sum', $this->sum);
        App::getSmarty()->display('OrderView.tpl');
    }
}





// try{
//     App::getDB()->insert('gameorder', [
//          'userID' => $userID,
//           'gameID' => $this->gameID
//      ]);
   
//     Utils::addInfoMessage('Pomyślnie utworzono zamówienie');
//     }
//    catch (\PDOException $e) {
//     Utils::addErrorMessage('Wystąpił błąd podczas tworzenia zamówienia');
//        if (App::getConf()->debug)
//           Utils::addErrorMessage($e->getMessage());
//    }

//    App::getRouter()->forwardTo('gameListShow');