<?php


# TYPE DECLARATIONS

/*
As declarações de tipo fora adicionadas na versão 5.1 do PHP e na versão 5.4 fora acrescentados mais tipos, como por exemplo o callable.

Outros tipos foram adicionados apenas na versão 7 e na versão 8, foi acrescentado o tipo mixed.

O tipo callable tem que ser uma função, método ou objeto. Podemos, por exemplo, usar uma função anônima

 */

$falar = function($mensagem)
{
    echo 'A minha mensagem é: '.$mensagem;

};

function minha_funcao(callable $funcao, $dados)
{
    $funcao($dados);
}

minha_funcao($falar, 'Esta é a minha função');

/*

Tipos bool, int, float e string foram adicionados na versão 7 do PHP
É contudo necessário ter em conta que o PHP faz conversões automáticas de tipos.
*/