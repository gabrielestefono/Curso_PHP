<?php

function soma($a, $b){
    echo print_r(func_get_args()) . "<br>";
    echo print_r(func_num_args()) . "<br>";
    return $a + $b;
}

soma(2,4);