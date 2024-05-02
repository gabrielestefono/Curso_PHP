<?php

$velocidade = 120;

if($velocidade < 40){
    echo "Você está na velocidade correta!<br>";
}else if($velocidade == 40){
    echo "Está no limite de velocidade. Cuidado!<br>";
}else{
    echo "Você está acima do limite de velocidade. Você será multado! <br>";
}

