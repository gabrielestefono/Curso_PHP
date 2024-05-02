<?php

class Pessoa{
    public $nome;
    public $idade;
    function andar($nome, $i){
        echo "$nome andou $i metros!";
    }
}

$mateus = new Pessoa;

$mateus->idade = 29;
$mateus->nome = "Mateus";
echo $mateus->idade . "<br>";
echo $mateus->nome . "<br>";
$mateus->andar($mateus->nome, 500);