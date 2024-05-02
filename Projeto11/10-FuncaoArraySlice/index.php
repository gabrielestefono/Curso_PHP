<?php

$arr = range(0,20);

$slice = array_slice($arr, 4, 5);

print_r($slice);

echo "<br>";

$slice1 = array_slice($arr, 8, 5);

print_r($slice1);