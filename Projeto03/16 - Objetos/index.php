<?php 

class Pessoa {

    function falar(){
        echo "Olá, pessoal!";
    }
}
$gabriel = new Pessoa();

$gabriel->nome = "Gabriel";

echo $gabriel->nome;
echo "<br>";

$gabriel->falar();

?>