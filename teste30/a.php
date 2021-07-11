<?php


# TYPE DECLARATIONS

/*
Quando dissemos que o PHP não é uma liguagem tipificada, isto é, as variáveis não tem necessariamenteque ser deifnidas com um tipo, não é bem assim.
É possível especificar claramente que tipo de valor podemos usar para parâmetros de funções, propriedades de classes e tipos de retorno de funções.

Vejamos no caso de um array como parâmetro de uma função:
*/

function falar(array $mensagem)
{
    echo $mensagem;
}

// falar('joão');   # Não é possível

// -------------------------------------------------

function conversar(string $mensagem)
{
    echo $mensagem;
}

// Aqui vai ser feita uma conversão de inteiro para string
conversar(2500);

// conversar(['a']);    # não é possível