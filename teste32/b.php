<?php


# TESTANDO VARIÁVEIS

# IS NULL

# Verifica se a variável tem o valor null ou não

$b = 'João';
is_null($b);    // false

$c = null;
is_null($c);    // true

/*
Com o PHP 8 houve uma mudança na forma como o is_null funciona.
Anteriormente, ao testar com is_null uma variável inexistente, era apresentado verdadeiro com um aviso

Com o PHP 8 passa a existir um erro de tipo.

*/

is_null($d);    // erro.