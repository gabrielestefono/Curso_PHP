<?php

abstract class Teste{
    public static function testandoClasse(){
        echo "Este método é uma classe abstrata <br>";
    }

    abstract public function testeABS(); 
}

// $t = new Teste;

Teste::testandoClasse();

class Nova extends Teste{
    public function testeABS(){
        echo "Aadasdas <br>";
    }
}

$n = new Nova;
$n->testeABS();
