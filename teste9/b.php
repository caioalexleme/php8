<?php

# CONCATENAÇÃO DE STRINGS
# É o processo que, através do código, permite juntar várias strings
# Existem dois operadores de concatenação:

# .
# .=

$a = 'João' . ' ' . 'Ribeiro';         # O ponto liga as diferentes strings

$b = 'João';                        # .= faz uma concatenação com o valor ja existente na string
$b.= ' ' . 'Ribeiro';


echo $a;
echo '<br>';
echo $b;
echo '<br>';

$nome = 'João';
$apelido = 'Ribeiro';
$nome_completo = $nome . ' ' . $apelido;

echo $nome_completo;

echo '<br>';

# A diferença entre strings delimitadas por ' e por " é que no segundo caso podemos fazer o seguinte:

$nome_completo = "$nome $apelido";
echo $nome_completo;

# Ao contrário das ", nas strings ' as variáveis não são interpretadas relativamente ao seu valor (Parse)

die();

















