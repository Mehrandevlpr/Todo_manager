<?php

namespace App\controller;

use App\service\request\request;
use App\service\view\view;
use PDO;
use PDOException;

class login extends main {
    
    /**************************************************************
    ** Description: This section checks the user's registration  **
    ** Set user data registration                                **
    **/
      
    public function index(request $request){
        view::render('login.register');
    }

    public function register(request $request){

        if(! $request->register ){
            view::render('login.login');
        }
        // sanitize 
        // exception

        $user_data = array(
            'email' => $request->email,
            'name' => $request->username,
            'password' => $request->password
        );


        $stmt ="INSERT INTO users (name,email,password)
        VALUES ('{$request->username}','{$request->email}','{$request->password}')";
        $this->pdo->exec($stmt);
        $this->pdo->connect();
    }

    public function main(request $request){
        view::render('home.index');
    }
}

?>