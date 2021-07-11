<?php


# STRICT TYPING

/*
A partir do PHP 7.1, passou a ser possível usar um tipo de declaração nullable.
Com isto, além do tipo de valor "normal" que a variável pode ter, também pode ter o valor nulo.
Usamos para isto um prefixo ? antes do tipo de valor

*/

declare(strict_types=1);

function falar(?string $mensagem)
{
    echo $mensagem;
}

falar('Minha mensagem');
falar(null);        # Também passa a ser possível

/*
Com o PHP 8 aparece a possibilidade de definirmos mais de um tipo para o mesmo argumento. Os tipos podem ser separados por barras verticais.
*/

function conversar(int|string $mensagem)
{
    echo $mensagem;
}

conversar('Olá mundo!');
conversar(2500);

# ou no caso dos tipos de retorno

function calcular_quadrado_de(int|float $v1): int|float
{
    return $v1 * $v1;
    return 'João';

}

echo calcular_quadrado_de(25);
echo calcular_quadrado_de('Caio');