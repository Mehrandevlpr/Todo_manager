<?php

namespace App\controller;

use App\service\view\view;
use PDO;
use PDOException;

class home extends main {
    
    /**************************************************************
    ** Description: This section checks the user's registration  **
    ** Set user data registration                                **
    **/
      
    public function index(){
    
       
        $stm ='SELECT * FROM users';
        // $pdo->exec('SELECT * FROM users');
        $record = $this->pdo->fetchAll($stm);
        $this->pdo->connect();
        // $record = $pdo->exec('SELECT * FROM users');
        var_dump($record);

        view::render('login.register');
    }
}

?>