<?php


# É possível executar uma expressão de retorno dentro de um script importado.

$paises = require_once 'dados.php';
// echo 'Países';
// echo '<pre>';
// print_r($paises);

echo 'Países';
echo '<hr>';
foreach ($paises as $pais) {        # Mesmo resultado de cima apenas mais sofisticado.
    echo $pais . '<br>';
}
