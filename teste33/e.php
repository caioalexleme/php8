<?php


# VAR_EXPORT

/*
Apresenta informação sobre uma variável num estilo que pode ser usado como código PHP

*/
echo '<pre>';
$nome = 'João';
var_export($nome);

echo '<br>';

$valores = [1, 2, 3];
var_export($valores);

echo '<br>';

$numeros = [];
for($i = 0; $i < 10; $i++)
{
    $numeros[] = rand(0, 100);
}

var_export($numeros);
echo '<br>';
$n = array ( 0 => 63, 1 => 93, 2 => 75, 3 => 7, 4 => 25, 5 => 58, 6 => 32, 7 => 82, 8 => 35, 9 => 59, );
print_r($n);