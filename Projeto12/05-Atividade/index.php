<?php

class Cachorro{
    function falar(){
        echo "O cachorro fala<br>";
    }
    function andar(){
        echo "O cachorro anda<br>";
    }
}

$lunar = new Cachorro;

$lunar->falar();
$lunar->andar();