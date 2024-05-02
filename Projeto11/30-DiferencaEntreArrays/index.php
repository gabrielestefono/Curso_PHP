<?php

$arr1 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$arr2 = [2, 3, 44, 5, 6, 77, 8, 9, 10];


$dif = array_diff($arr1, $arr2);

print_r($dif);

echo "<br>";

$dif1 = array_diff($arr2, $arr1);

print_r($dif1);

echo "<br>";

