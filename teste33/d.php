<?php


# VAR_DUMP

/*
Têm um resultado semelhante ao print_r, mas para além dos valores apresenta também a informação sobre o tipo de valores.

*/
echo '<pre>';   # formata um pouco melhor a apresentação
$nome = 'João';
var_dump($nome);

echo '<br>';

$valores = [1, 2, 3.5];
var_dump($valores);