<?php

# Uma função nunca pode ser executada sem que os valores obrigatórios sejam fornecidos

# Exemplo:

function funcao($a, $b)
{
    // código aqui
}

// funcao('teste');
# Isto é errado - só foi fornecido o valor de $a

# contudo embora pouco frequente, podemos passar mais argumentos do que o solicitado

function outraFuncao($a)
{
    $x = func_get_arg(0);       # $a têm o mesmo valor que $x, posso até apagar o $a
    $y = func_get_arg(1);
    $z = func_get_arg(2);

    echo "$a - $x - $y - $z <br>";

    echo func_num_args();       # Avalia quantos argumentos foram passados para a função
}

outraFuncao(10, 20, 30);

echo '<br>';

# também não muito comum, mas sendo possível, podemos usar um argumento especial
# designado por 'variadic parameter'
function minha_funcao(...$argumentos)
{
    foreach ($argumentos as $v) {
        echo "$v<br>";
    }
}

minha_funcao(10, 20, 30, 40, 50);
