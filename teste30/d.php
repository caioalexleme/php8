<?php


# STRICT TYPING

# O comportamento do PHP é tentar converter os tipo declarados.

// declare(strict_types=1);    # tem que ser colocado no começo do script

function falar(string $mensagem)
{
    echo $mensagem;
}

falar('Olá mundo');    # É possível
falar(2500);           # É possível

function somar(int $v1, int $v2)
{
    return $v1 + $v2;
}

echo somar(10, 20);     # É possível
echo somar('a', 'b');   # Não é possível

# Mas podemos obrigar o PHP a seguir a regra estritamente definida, porém precisa ser definida no começo do script

//declare(strict_types=1);