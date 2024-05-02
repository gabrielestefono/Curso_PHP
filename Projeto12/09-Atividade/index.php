<?php

class Carro{
    public $velocidadeMaxima;
    public $portas;
    public $tetoSolar;

    function setVelocidadeMaxima($velocidade){
        $this->velocidadeMaxima = $velocidade;
    }

    function getVelocidadeMaxima(){
        echo "A velocidade máxima é de: $this->velocidadeMaxima km/h <br>";
    }
}

$ferrari = new Carro;

$ferrari->setVelocidadeMaxima(250);

$ferrari->getVelocidadeMaxima();