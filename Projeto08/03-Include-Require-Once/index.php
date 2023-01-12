<?php

// Arquivos que não existem

include_once "teste.php";
echo "continuou <br>";
include_once "teste2.php";
echo "continuou <br>";
include_once "teste2.php"; // Não foi impresso
echo "continuou <br>";


require_once "teste3.php";
echo "continuou <br>";
require_once "teste3.php"; // Não foi impresso
echo "continuou <br>";
require_once "teste.php"; // Parou aqui
echo "continuou <br>";
