<?php

include_once("db.php");
include_once("dao/carDAO.php");

$carDAO = new CarDao($conn);
$carDAO->__contruct($conn);


$brand = $_POST["brand"];
$km = $_POST["km"];
$color = $_POST["color"];

$newCar = new Car();

$newCar->setBrand($brand);
$newCar->setKm($km);
$newCar->setColor($color);

$carDAO->create($newCar);

header("location: index.php");