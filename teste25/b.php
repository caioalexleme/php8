<?php


# STATIC

# como se fazem as implementações

class Operacoes
{
    static $valor1;
    static $valor2;

    static function adicionar()
    {
        return self::$valor1 + self::$valor2;
        return Operacoes::$valor1 + Operacoes::$valor2;     // alternativa (mesmo resultado)
    }
    static function hashAleatoria()
    {   
        return rand(1, 60);   // rand sorteia(random) um valor aleatório, no caso definido entre 1 e 60
    }
}

Operacoes::$valor1 = 10;
Operacoes::$valor2 = 20;
echo Operacoes::adicionar();

echo '<br>';

$hash = Operacoes::hashAleatoria();
echo $hash;
