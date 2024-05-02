<?php

$mateus = [
    "nome" => "Mateus",
    "idade" => 29,
    "profissao" => "Programador",
];


$alexia = [
    "nome" => "Alexia",
    "idade" => 35,
    "profissao" => "Engenheira Civil",
];



foreach($mateus as $carac => $value){
    echo "$carac => $value <br>";
}

foreach($alexia as $carac => $value){
    echo "$carac => $value <br>";
}