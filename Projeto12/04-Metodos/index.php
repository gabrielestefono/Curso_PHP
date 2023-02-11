<?php

class Pessoa{
    function falar(){
        echo "Olá, eu sou um objeto!<br>";
    }

    function somar($x, $y){
        echo $x + $y . "<br>";
    }
}

$mateus = new Pessoa;
$joao = new Pessoa;

$mateus->falar();
$mateus->falar();
$joao->falar();

$mateus->somar(2,2);
$joao->somar(10,10);