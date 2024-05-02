<?php

$x = 100;
$y =& $x;

echo $y;
$y = "Mudei";
echo "<br>";
echo $y;

?>