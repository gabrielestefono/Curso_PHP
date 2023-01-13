<?php

$arr = [
    "Porta" =>100,
    "Maçaneta" => 5,
    "Janela" => 25,
    "Panela" => 7,
    "comida" => 10
];

function itensCaros($arr){
    $arrItensCaros = [];
    foreach($arr as $item => $preco){
        if($preco > 10){
            array_push($arrItensCaros, $item);
        }
    }
    return $arrItensCaros;
}

$novoArray = itensCaros($arr);

print_r($novoArray);