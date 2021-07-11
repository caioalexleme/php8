<?php


# UNSET

/*
Permite "destruir" uma variável.
Existem duas formas de o fazer, mas com ligeiras diferenças de performance e atuação no sistema

*/

$a = 'João';
unset($a);

$b = 'Antônio';
$b = null;

/*
No primeiro caso a variável é "libertada" e no próximo ciclo de limpeza (garbage collector) ela é removida da memória.

No segundo caso a variável vai persistir na memória quanto à inexistência de valor.

Sugere-se a utilização do unset nestes casos.

*/