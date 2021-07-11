<?php


# TYPE CONVERSIONS

/*
Embora o PHP procure automaticamente fazer uma conversão de dados entre diferentes tipos, é uma boa prática explicitar isso no código.
Uma variável do tipo int não é o mesmo que uma string e vice-versa.

*/

$meu_boleano = true;
echo $meu_boleano;      # resulta numa string vazia
// echo (int)$meu_boleano;

/*
Designamos esta operação como conversão explícita (explicit cast)
Podemos fazer converter os principais tipos de valores 
(string), (int), (float), (array), etc.

Vejamos caso da conversão dum array num objeto.
*/

$nomes = ['João', 'Ana', 'Carlos'];

$nomes1 = (object)$nomes;
echo '<pre>';
print_r($nomes1);

// Por exemplo, podemos converter uma variável num array com um único valor

$nome = 'João';
$os_nomes = (array)$nome;
print_r($os_nomes);