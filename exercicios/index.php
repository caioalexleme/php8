<?php

$nome = 'Caio';
$apelido = 'Alexandre';
$nome_completo = "$nome $apelido"

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exrcício</title>
</head>
<body>
    <h3>O meu nome é: </h3>
    <h1><?php
        echo "$nome $apelido";
    ?>
    </h1>
    <p>O meu nome tem <?= mb_strlen($nome_completo) ?> caracteres</p>
    <p><?="O meu nome é ".mb_strtoupper($nome)." e o meu apelido é ".strtoupper($apelido)?></p>

</body>
</html>