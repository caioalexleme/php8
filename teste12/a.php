<?php

# ARRAYS

# Um array (traduzido para PT é uma matriz) é na realidade uma coleção de valores.
# Funciona como uma variável, mas pode conter muitos valores "arrumados" cada um no seu espaço.
# Esse espaço é designado por "índice" do array.

# Resumindo, um array é uma coleção constituída por chaves/índices e valores.
# As chaves/índices podem ser noméricos (array numérico) ou strings (array associativo).
# e podem até coexistir os dois tipos de índices no array.
# Os valores podem ser de qualquer tipo, inclusive ser outros arrays

# Exemplos

$valores = array(1, 2, 3, 10, 20, 30);
$nomes = array('João', 'Ana', 'Carlos');

# A partir do PHP 5.4, passou a ser possível escrever os arrays de forma mais simplificada

$valores = [1, 2, 3, 10, 20, 30];
$nomes = ['João', 'Ana', 'Carlos'];


# Estes arrays são de índice numérico.
# Para apresentar um dos valores, procedemos da seguinte forma:
echo $valores[0];
echo $nomes[1];

# NUNCA ESQUECER QUE OS ARRAYS TEM ÍNDICE DE BASE 0

# Não tem obrigatoriedade de ter chaves sequenciais
$dados = [
        10 => 1000,
        20 => 2000,
        30 => 3000
];
echo $dados[30];

# Se adicionarmos um novo elemento no final da coleção, ele vai assumir o último índice + 1
$dados[] = 4000;    # dados[31];
echo $dados[31];