<?php

class Humano{
    public $idade = 29;
    public function falar(){
        echo "Olá mundo <br>";
    }

    private function gritar(){
        echo "PHP é muito bom!!! <br>";
    }

    public function acessarGritar(){
        $this->gritar();
    }

    protected function falarBaixinho(){
        echo "La la la la la <br>";
    }

    public function acessarFalarBaixinho(){
        $this->falarBaixinho();
    }
}

class Programador extends Humano{
    public function acessarFalarBaixinhoProgramador(){
        $this->falarBaixinho();
    }
}


$ze = new Humano;

$ze->falar();

$ze->acessarGritar();

$ze->acessarFalarBaixinho();

$mateus = new Programador;

echo $mateus->idade . "<br>";

$mateus->falar();

$mateus->acessarGritar();

$mateus->acessarFalarBaixinhoProgramador();