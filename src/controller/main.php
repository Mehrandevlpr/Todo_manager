<?php

namespace App\controller;
use App\model\contract\connection;

class main {
    protected $pdo;
    public function __construct()
    {
        $conn = new connection();
        $this->pdo = $conn::getInstance();
        return $this;
    }
}

?>