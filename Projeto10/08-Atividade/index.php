<?php

$ditado = "O rato roeu a roupa do rei de roma";
$contador  = 0;
for($i = 0; $i < strlen($ditado); $i++){
    echo "$ditado[$i] <br>";
    if($ditado[$i] == "a"){
        $contador++;
    }
}
echo "<br>";
echo "<hr>";
echo "<br>";
echo $contador;