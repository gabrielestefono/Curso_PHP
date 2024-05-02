<?php

$x = 10;

function teste(){
    $x = 5;
    echo $x;
    echo "<br>";
    echo "Local";
}

echo $x;
echo "<br>";
echo "Global";
echo "<br>";
teste();

function testando(){
    $x = 12;
    echo "<br>";
    echo $x;

}
testando();

?>