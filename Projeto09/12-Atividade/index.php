<?php

$a = [];
$arr = [1, 3, 5, 7, 9, 12, 15, 17, 19];
function novoarray(){
    global $a, $arr;
    foreach($arr as $num){
        if($num > 7){
            array_push($a,$num);
        }
    }
    return $a;
}

novoarray();
print_r($a);