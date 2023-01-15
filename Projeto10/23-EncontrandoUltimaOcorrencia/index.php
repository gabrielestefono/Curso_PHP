<?php

$str = "Testando encontrado palavra teste, em uma string que tem teste";

$testeEncontrar = strrpos($str, "teste");

echo $testeEncontrar . "<br>";

$testeEncontrar2 = strpos($str, "teste");

echo $testeEncontrar2;