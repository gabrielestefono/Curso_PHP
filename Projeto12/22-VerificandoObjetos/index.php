<?php

class Humano{
    public $nome;
    public $idade;
    public $profissao;
    public function falar(){}
    public function andar(){}
}

$mateus = new Humano;

if(is_object($mateus)){
    echo "É um objeto <br>";
}else{
    echo "Não é um objeto <br>";
}

if(is_object(5)){
    echo "É um objeto <br>";
}else{
    echo "Não é um objeto <br>";
}

echo get_class($mateus) . "<br>";

if(method_exists($mateus, "falar")){
    echo "O método existe <br>";
}else{
    echo "O método não existe <br>";
}