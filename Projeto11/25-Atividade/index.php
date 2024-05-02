<?php

$arr = [
    "Mateus" => 2918,
    "João" => 18230,
    "Luiz" => 25520,
    "Maria" => 1255,
    "Roberta" => 5500,
    "Vinicius" => 9900,
    "Leticia" => 153291
];

arsort($arr);
?>

<table style="border: 1px solid black;">
    <tr style="border: 1px solid black;">
        <th style="border: 1px solid black;">Posição</th><th style="border: 1px solid black;">Jogador</th><th style="border: 1px solid black;">Pontuação</th>
    </tr>
    <?php $i = 0; foreach($arr as $nome => $valor):?>
    <tr>
        <td style="border: 1px solid black; text-align: center;"><?= ++$i ?></td><td style="border: 1px solid black; text-align: center;"><?=$nome?></td><td style="border: 1px solid black; text-align: center;"><?=$valor?></td>
    </tr>
    <?php endforeach;?>
</table>
