<?php

$arr1 = [1, 3, 5, 7, 9, 11, 13, 15, 17, 19];
$arr2 = [2, 4, 6, 8, 10, 12, 14, 16, 18, 20];

$juncao = array_merge($arr1, $arr2);

sort($juncao);

print_r($juncao);