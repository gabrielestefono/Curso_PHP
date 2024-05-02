<?php

$string = "Dessa vez, vou transformar cada vírgula em espaço vazio, usar o explode ou implode para criar um array e então verificar se a palavra livro está no array";
$arr = [
    "nome" => "Gabriel",
    "Sobrenome" => "Geraldo?"
];

if(array_key_exists("nome", $arr)) {
    echo "Sim, o nome é " . $arr["nome"] . "<br>";
}else{
    echo "Não";
}

if(isset($arr["nome"])) {
    echo "Sim, o nome é " . $arr["nome"];
}else{
    echo "Não";
}