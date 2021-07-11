<?php

# Podemos comparar strings da seguinte forma;
$a = 'João';
$b = 'Carlos';

$c = ($a == $b);        // false
$d = ($a != $b);        // true


# Existe funções nativas no PHP para operar strings

# Exemplos;

$frase = 'Esta frase tem 29 caracteres.';

# retorna o número de caracteres da string
$numero_caracteres_total = strlen($frase);

# retorna a letra apartir da posição 0 e durante 4 caracteres
$primeira_palavra = substr($frase, 0, 4);   # Esta

# converte toda a string em letras maiúsculas
$todas_maiusculas = strtoupper($frase);

# converte toda a string em letras minúsculas
$todas_maiusculas = strtolower($frase);

# substituir uma letra por outra
$nova_frase = str_replace('a', 'x', $frase);   # Estx frxse tem 29 cxrxcteres.

# verifica qual é a posição de um caracter dentro da string
$posicao = strpos($frase, 'a');     # 3

// https://www.php.net/manual/pt_BR/ref.strings.php
