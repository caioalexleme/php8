<?php

# RETURN

# A declaração return provoca o fim da execução do código de uma função, retornando ao local onde a função foi chamada.

function falar()
{
    return;
    echo 'Não vai ser apresentado esse texto';
}

# opcionalmente podemos usar o return para devolver um valor.
# Desta fora, uma função pode ser responsável, por exemplo,
# por desenvolver um conjunto de cálculos e devolver o resultado.

function adicionar($a, $b)
{
    $resultado = $a + $b;
    return $resultado;

    # ou
    return $a + $b;
}

echo adicionar(10, 20);     # vai apresentar o valor 30

echo '<br>';

# outro exemplo
$nome = 'João';
if (avaliar_nome($nome)) {
    echo 'O cliente está correto!';
}

function avaliar_nome($n)
{
    if ($n == 'João') {
        return true;
    } else {
        return false;
    }
}


echo '<br>';
# Uma função se qualquer valor de retorno, devolve sempre um valor null
function teste()
{
    // código aqui
}

if (falar() === null) {
    echo 'Função com retorno igual a nulo';     # vai ser apresentado esse texto
}
