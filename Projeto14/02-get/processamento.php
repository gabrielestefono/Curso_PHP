<?php

    if(isset($_GET["nome"])){
    $nome = $_GET["nome"];
    $idade = $_GET["idade"];
    }else{
        $nome = "Padrão";
        $idade = "Padrão";
    }

?>

<h1>Olá <?=$nome?>! <?php echo $idade >= 18 ? "seja bem vindo ao site!" : "É necessário ter 18 anos ou mais para o acesso ao site!";?></h1>