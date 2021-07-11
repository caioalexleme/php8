<?php

// VARIÁVEIS
// =================

# São usadas para guardar dados: números, textos, etc...
# Podemos apresentar e modificar seus valores ao longo do código

# Definem se com um dólar ($) e um identificador (nome da variável)
$variavel;



# Podemos definir e iniciar uma variável
// $variavel = 100;

# Podemos alterar o tipo de valores de uma variável
// $variável = "teste";



# As variáveis são Case Sensitives
// $variavel = "uma variável";
// $Variavel = "Outra variável";


# Nunca pode criar (definir) uma variável das seguintes formas:
$1var = 0; // Começando por números
$!var = 0; // Começando por símbolos (desconsiderando o padrão '$')
$variavel um = 0; // Contendo espaços 
$variavel-um = 0; // Contendo iféns

# Podemos criar das seguintes maneiras apenas:
$var1 = 0; // Pode conter números, o que não pode é começar com números
$var_um = 0; // Pode separar por underline '_'
$_um = 0; // Pode começar co underline '_'
$_1 = 0; //Pode começar com número desde que antes tenha underline '_' separando do dólar '$'

# Convenções
$umaVariavel = 0; // camel case
$uma_variavel = 0; // com undersores (snake case)
$umaVariavel = 0; //studly case (não recomendado)

# O RECOMENDADO É MANTER SEMPRE O MESMO ESTILO AO LONGO DO PROJETO

$variavel = 100;
echo $variavel;