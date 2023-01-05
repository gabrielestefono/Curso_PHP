<?php

$a = (int) "12";

echo $a . "<br>";
echo $a + 10 . "<br>";

if($a === 12){
    echo "São identicos. <br>";
}

if(is_int($a)){
    echo "São identicos. <br>";
}