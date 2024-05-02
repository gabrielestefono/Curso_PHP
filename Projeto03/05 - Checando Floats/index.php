<?php

$a = 'Teste';
$b = 10.5;

if(is_float($a)){
    echo "Sim";
}else{
    echo "Não";
}


echo '<br>';


if(is_float($b)){
    echo "Sim";
}else{
    echo "Não";
}


echo '<br>';


if(is_float(6565.63)){
    echo "Sim";
}else{
    echo "Não";
}

echo '<br>';


if(is_float('teste')){
    echo "Sim";
}else{
    echo "Não";
}


echo '<br>';


if(is_float(5)){
    echo "Sim";
}else{
    echo "Não";
}


echo '<br>';

if(is_float(1586546.545646)){
    echo "Sim";
}else{
    echo "Não";
}

?>