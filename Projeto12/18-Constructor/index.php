<?php

class Car{
    public $portas;
    public $cor;
    public $marca;
    public function __construct($portas, $cor, $marca){
        $this->portas = $portas;
        $this->cor = $cor;
        $this->marca = $marca;
    }
}

$ferrari = new Car(4, "Vermelha", "Ferrari");

echo "O carro é da marca $ferrari->marca e a cor é da cor $ferrari->cor <br>";

$bmw = new Car(2, "Verde", "BMW");

echo "O carro é da marca $bmw->marca e a cor é da cor $bmw->cor ";