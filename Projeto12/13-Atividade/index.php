<?php

class Humano{
    public $olhos = 2;
    public $pernas = 2;
    public $braços = 2;

    public function falar(){
        echo "Sou humano! <br>";
    }
}

class Professor extends Humano{
    public $materia = "Matemática";
    
    public function estaLecionando(){
        echo "Está lecionando matemática <br>";
    }
}


$timoteo = new Professor;
$timoteo->falar();
$timoteo->estaLecionando();