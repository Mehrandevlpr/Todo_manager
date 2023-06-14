<?php

namespace App\model\contract;

use Aura\Sql\ExtendedPdo;
use App\model\contract\InterfaceConnection;
use PDOException;

class connection extends ExtendedPdo{


     protected static $table;
     protected $connection;
     protected static $instance;
     
     public function __construct(){

               $arg = getPdoconfigs('pdo');
               extract($arg);
               self::$instance = new ExtendedPdo($host,$username,$password,[],[]);
               return $this;
     }

     public static function getInstance() {
          if (!isset(self::$instance)) {
               $object = __CLASS__;
               self::$instance = new $object;
          }
          return self::$instance;
     }

}

?>