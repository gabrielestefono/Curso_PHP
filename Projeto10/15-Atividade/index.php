<?php

$frase = "Cadê o meu queijo? Ele estava aqui em cima!";

$nova = substr($frase, 12, 6);
$nova2 = substr($frase, 23, 7);

$nova3 = ucfirst($nova);

echo $nova . "<br>";
echo $nova2 . "<br>";
echo $nova3;