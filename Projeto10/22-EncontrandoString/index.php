<?php

$str  =  "Estamos testando o método strpos, com o strpos podemos encontrar strings";

$testeEncontrar = strpos($str, "strpos");

echo $testeEncontrar . "<br>";

$testeEncontrar2 = strpos($str, "java");

if($testeEncontrar2 == false){
    echo "Não encontrado";
}
