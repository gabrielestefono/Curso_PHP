<?php
echo "Contador de passos <br>";
echo "Vamos dar 100 passos?  <br>";
for($i = 1; $i <= 150; $i++){
    echo $i . "<br>";
    if(($i + 5) % 10 == 0){
        echo "Quase " . $i + 5 . " vamos lá <br>";
    }
    
    if($i == 100){
        echo "Você conseguiu!!! Parabéns!!!";
        break;
    }

    if($i % 10 == 0){
        echo "Já foram $i passos <br>";
        continue;
    }
}