<?php

$teste = "asd";

echo "$teste global 1<br>";

if(5>2){
    $teste = "dsa";
    echo "$teste global 2<br>";
}

function funcao(){
    global $teste;
    echo "<br>";
    echo "$teste global";
}

funcao();

?>