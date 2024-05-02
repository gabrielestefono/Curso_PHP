<?php

class Car{
    public $rodas = 4;
    private $vidro = "Sem película";
    public function getVidro(){
        return $this->vidro;
    }
}

class Mecanico{
    public function alterarRodas($carro){
        $carro->rodas = 10;
    }
    public function colocarPelicula($carro, $pelicula){
        $carro->vidro = $pelicula;
    }
}

$carro = new Car;

echo $carro->rodas . "<br>";

$gabriel = new Mecanico;

$gabriel->alterarRodas($carro);

echo $carro->rodas . "<br>";

echo $carro->getVidro() . "<br>";