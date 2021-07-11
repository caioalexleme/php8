<?php

# CLASSES

# As classes são definidas pela declaração class, o seu nome e o bloco
# de códigos que contém as suas propriedades e métodos

# Por convenção PSR-1, o nome de um classe deve ser sempre atribuído
# na forma de StudliCaps/PascalCase/MixedCase. O corpo deve ser definido da seguinte forma:

class Humano
{
    // propriedades e métodos
}

class JogadorFutebol
{
    // propriedades e métodos
}

# O corpo de uma classe contém PROPRIEDADES e MÉTODOS
# PROPRIEDADES - são variáveis que guardam a característica do objeto.
# MÉTODOS - são funções que definem o que o objeto pode fazer.

# As propriedades são também conhecidas como fields (campos) ou atributos de uma classe
# No PHP, as propriedades têm que ter um nível de acesso especificado
# Veremos o que isso significa mais a frente

class FiguraGeometrica
{
    public $largura, $altura;
    public $x;
    public $y;

    function NovaArea($a, $b){
        return $a * $b;
    }   
}