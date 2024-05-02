<?php

$arr = ["Banana","Mamão","Pão","Queijo","Presunto","Laranja","Macarrão","Arroz","Feijão","Cenoura","Cebola","Alho","Frango"];

echo "Primeira forma um de resolver o problema: <br>";

function virgulaPorItem($array){
    $a = '';
    foreach($array as $elemento){
        $a = $a .  $elemento . ", ";
    }
    $a = substr($a,0, -2);
    $a = $a . "<br>";
    return $a;
}

$resultado = virgulaPorItem($arr);
echo $resultado;

echo "Segunda forma um de resolver o problema: <br>";

function virgulaPorItem2($array){
    return implode(", ", $array);
}

$resultado2 = virgulaPorItem2($arr);
echo $resultado2;