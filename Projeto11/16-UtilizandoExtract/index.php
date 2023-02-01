<?php

$arr = ["cor"=> "Vermelho",
        "forma" => "retângular",
        "material" => "aço"];

extract($arr);

echo "$cor <br>";
echo "$forma <br>";
echo "$material <br>";

$nome = "Mateus";

$pessoa = [
    'nome' => "João",
    'idade' => 29
];

extract($pessoa);

echo "$nome <br>";
echo "$idade";