<?php

namespace Source\Models;

use Source\Core\Connect;

class Cars{
    private $id;
    private $model;
    private $brand;
    private $price;
    private $year;
    private $description;

    public function selectAllCars ()
    {
        $query = "SELECT * FROM cars";
        $stmt = Connect::getInstance()->query($query);
        return $stmt->fetchAll();
    }
    public function selectFirstCars(){
        $query = "SELECT * FROM cars where id = 1";
        $stmt = Connect::getInstance()->query($query);
        return $stmt->fetch();
    }
    public function selectSecondCars(){
        $query = "SELECT * FROM cars where id = 2";
        $stmt = Connect::getInstance()->query($query);
        return $stmt->fetch();
    }
    public function selectThirdCars(){
        $query = "SELECT * FROM cars where id = 3";
        $stmt = Connect::getInstance()->query($query);
        return $stmt->fetch();
    }
}