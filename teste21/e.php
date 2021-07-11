<?php


# Para classes que têm construtor sem parâmetros, podemos instanciar da seguinte forma:

class Humano
{
    function __construct()
    {
        // código aqui
    }
}

$homem = new Humano;
# ou
$homem = new Humano();