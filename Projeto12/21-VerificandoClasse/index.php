<?php

class Humano{
    public $nome;
    public $profissao;
    public $idade;

    function falar(){}
    function andar(){}
}

if(class_exists("Humano")){
    echo "A classe existe <br>";
}else{
    echo "A classe não existe <br>";
}

if(class_exists("Cachorro")){
    echo "A classe existe <br>";
}else{
    echo "A classe não existe <br>";
}

print_r(get_class_vars("Humano"));

echo "<br>";

print_r(get_class_methods("Humano"));