<?php

$url = "https://www.google.com.br";

$arrayURL = parse_url($url);

print_r($arrayURL);

echo "<br>";

echo $arrayURL["scheme"] . " " . $arrayURL["host"] ;