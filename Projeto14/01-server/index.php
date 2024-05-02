<?php

print_r($_SERVER);
echo "<br>";

$server = $_SERVER["SERVER_NAME"];

if($server == "localhost"){
    echo "O usuário está acessando o localhost";
}else{
    echo "O usuário não está acessando o localhost";
}

?>