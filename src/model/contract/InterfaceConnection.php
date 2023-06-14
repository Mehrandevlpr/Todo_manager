<?php

namespace App\model\contract;


interface InterfaceConnection{
     
     public function read($columns,$where);
     public function update($data, $where);
     public function sum($column, $where);
     public function action($callback);
     public function create($values);
     public function delete($where);
     public function findBy($data);
     public function count($where);
     public function query($sql);
     
} 

?>







?>