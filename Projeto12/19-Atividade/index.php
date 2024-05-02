<?php

class Cachorro{
    public $nome;
    public $cor;
    public $patas;

    function __construct($nome, $cor, $patas){
        $this->nome = $nome;
        $this->cor=  $cor;
        $this->patas = $patas;
    }

    public function exibirAnimal(){
        echo "O nome do cachorro é $this->nome, ele tem a cor $this->cor, e tem $this->patas patas <br>";
    }
}


$turca = new Cachorro("Turca", "preta", 4);
$turca->exibirAnimal();

$tubarao = new Cachorro("Tubarão", "Cinza", 0);
$tubarao->exibirAnimal();