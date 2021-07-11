<?php


# OBJETO ACCESS

# No PHP, um objeto instanciado a partir de uma classe
# pode aceder a elementos privados e protegidos de outro objeto
# criado a partir da mesma classe
# Este comportamento não acontece na maior parte das linguagens de programação

class Humano
{
    private $nome = 'x';

    function setPrivate($objeto, $valor)
    {
        $objeto->nome = $valor;
    }

    function apresentar()
    {
        echo $this->nome;
    }
}

$a = new Humano();
$b = new Humano();
$a->setPrivate($b, 'Caio');

$a->apresentar();
echo '<br>';
$b->apresentar();