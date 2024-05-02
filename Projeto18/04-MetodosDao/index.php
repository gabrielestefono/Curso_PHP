<?php

include_once("db.php");
include_once("dao/CarDAO.php");

$carDAO  = new CarDAO($conn);
$carDAO->__contruct($conn);
$cars = $carDAO->findAll();

?>

<h1>Insira um carro</h1>
<form action="process.php" method="POST">
<div>
        <label for="brand">Marca de Carro</label>
        <input type="text" name="brand" placeholder="insira a marca">
    </div>
    <div>
        <label for="km">Quilometragem</label>
        <input type="text" name="km" placeholder="insira a quilometragem">
    </div>
    <div>
        <label for="color">Cor do carro</label>
        <input type="text" name="color" placeholder="insira a cor">
    </div>
    <input type="submit" value="Salvar">
</form>


<ul>
    <?php foreach($cars as $car):?>
        <li><?=$car->getId()?> - <?=$car->getBrand()?> - <?=$car->getKm()?> - <?=$car->getColor()?></li>
    <?php endforeach?>
</ul>