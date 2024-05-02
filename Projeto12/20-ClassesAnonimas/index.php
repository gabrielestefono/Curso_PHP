<?php

$pessoas = new class(){
    public $nome = "Gabriel <br>";

    public function dizerNome(){
        echo "Meu nome é $this->nome";
    }
};

echo $pessoas->nome;

$pessoas->dizerNome();