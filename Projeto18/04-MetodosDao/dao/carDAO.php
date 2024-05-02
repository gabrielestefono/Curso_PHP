<?php

include_once('models/Car.php');

$bancodedados =  $conn;

class CarDAO implements CarDAOInterface{

    private $conn;

    public function __contruct(PDO $conn){
        $this->conn = $conn;
    }
    public function findAll(){
        
        $cars = [];

        $stmt = $this->conn->query("SELECT * FROM cars");

        $data = $stmt->fetchAll();

        foreach($data as $item){
            $car = new Car();
            $car->setId($item['id']);
            $car->setBrand($item['brand']);
            $car->setKm($item['km']);
            $car->setColor($item['color']);

            $cars[] = $car;
        }

        return $cars;
    }

    public function create(Car $car){

        $stmt = $this->conn->prepare("INSERT INTO cars (brand, km, color) VALUES (:brand, :km, :color)");

        $stmt->bindParam(":brand", $car->getBrand());
        $stmt->bindParam(":km", $car->getKm());
        $stmt->bindParam(":color", $car->getColor());
        
        $stmt->execute();

    }

}