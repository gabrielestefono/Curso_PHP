<?php

$dataHoje = ["Ano" => 2022, "Mes" => 12, "Dia" => 30];

$pessoa = [
    "Nome" => "Januaria",
    "Sobrenome" => "Oliveira",
    "Dia_de_Nascimento" => 5,
    "Mes_de_Nascimento" => 1,
    "Ano_de_Nascimento" => 2004,
    "Altura" => 1.63,
    "Peso" => 50,
    "Ocupacao" => "Babá"
];

if($dataHoje["Ano"] - $pessoa["Ano_de_Nascimento"] > 18){
    echo "Maior de idade";
}else if($dataHoje["Ano"] - $pessoa["Ano_de_Nascimento"] == 18){
    if($dataHoje["Mes"] - $pessoa["Mes_de_Nascimento"] > 0){
        echo "Maior de idade";
    }else if($dataHoje["Mes"] - $pessoa["Mes_de_Nascimento"] == 0){
        if($dataHoje["Dia"] - $pessoa["Dia_de_Nascimento"] > 0){
            echo "Maior de idade";
        }else if($dataHoje["Dia"] - $pessoa["Dia_de_Nascimento"] == 0){
            echo "FELIZ ANIVERSÁRIO!!!";
        }else if($dataHoje["Dia"] - $pessoa["Dia_de_Nascimento"] > 0){
            echo "Menor de idade";
        }
    }else if($dataHoje["Mes"] - $pessoa["Mes_de_Nascimento"] < 0){
        echo "Menor de idade";
    }
}else{
    echo "Menor de idade";
}

?>