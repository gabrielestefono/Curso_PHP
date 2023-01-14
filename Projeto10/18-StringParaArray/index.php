<?php

$str = "Essa é a nova string que será dividida em Arrays";

$strexplode = explode(" ", $str);
$strexplode2 = explode(",", $str);
print_r($strexplode);
echo "<br>";
print_r($strexplode2);