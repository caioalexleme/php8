<?php

# FUNCTIONS / FUNÇÕES

# PARÂMETROS OPCIONAIS e NAMED ARGUMENTS

# O PHP 8 introduz uma novidade: named arguments.
# se olharmos um exemplo até agora

function adicionar($a, $b = 10, $c = 30)
{
    echo $a + $b + $c;
}

# No PHP 7 se quisermos alterar o valor de $c e manter o valor de $b, temos que fornecer todos os valores
adicionar(100, 10, 300);

echo '<br>';

# No PHP 8 podemos fazer da seguinte forma:
adicionar(c:1000, a:0);     # O $a como não é opcional, é obrigatório no argumento
                            # Repare que não é declarado o argumeto com o '$' da variável.
echo '<br>';

adicionar(500, c: 1000);    # Como o $a é o primeiro parâmetro, neste caso não é necessário declarar, o primeiro
                            # valor 500, ja é atribuído automaticamente ao parâmetro '$a'