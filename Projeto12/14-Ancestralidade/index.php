<?php

class Humano{

}

class Animal{

}

$marcos = new Humano;

$turca = new Animal;

if($marcos instanceof Humano){
    echo "Marcos é um humano! <br>";
}else{
    echo "Marcos não é um humano! <br>";
}

if($turca instanceof Humano){
    echo "Turca é um humano! <br>";
}else{
    echo "Turca não é um humano! <br>";
}
