<?php
$b = 15;
$a = 10;
function testeEscopo(){
    $a = 5;
    echo "Escopo local de $a. <br>" ;
    $a++;
    echo "Escopo local de $a. <br>" ;
    global $b;
    $b++;
}
echo "Escopo global de $a. <br>" ;
echo "Escopo global de $b. <br>" ;
testeEscopo();
echo "Escopo global de $b. <br>" ;