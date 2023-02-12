<?php


class Car {
    public $rodas = 4;
    public $aro = 20;
    public $cor = "Vermelho";
    function ligar(){
        echo "Vruuuuum";
    }
}

$ferrari = new Car;

echo $ferrari->aro . "<br>";
echo $ferrari->rodas . "<br>";
$ferrari->cor = "Azul";
echo $ferrari->cor . "<br>";
$ferrari->ligar();