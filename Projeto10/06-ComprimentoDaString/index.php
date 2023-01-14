<?php

function tamanhoDaString($string){
    return strlen($string);
}

$str1 = "Essa string é muito grande";
$str2 = "Essa não";

echo strlen($str1) . "<br>";
echo strlen($str2);