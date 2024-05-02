<?php

    session_start();
    $_SESSION["nome"] = "Mateus";
    $nome = $_SESSION["nome"];

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessions</title>
</head>
<body>
    <h1>Olá, Session</h1>
    <p>Olá! meu nome é <?=$nome?></p>
    <a href="pagina.php">Próxima Página</a>
</body>
</html>