<?php

$carro = ["Jaguar", "3.0", "azul", 18, "Teto Solar", "Automático"];

list($nome, $motor, $cor, $aro, $acessorios, $cambio) = $carro;

echo "$nome <br>";
echo "$motor <br>";
echo "$cor <br>";
echo "$aro <br>";
echo "$acessorios <br>";
echo "$cambio <br>";

print_r($carro);