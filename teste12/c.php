<?php

# ARRAYS ASSOCIATIVOS

# Ao contrário dos arrays numéricos, as chaves são do tipo string

$dados = [
    'A' => 20,
    'B' => 30,
    'C' => 40,
    'D' => 50,
    'E' => 60,

];

# ou

$dados = [
    'nome' => 'Caio',
    'email' => 'caioalexleme@hotmail.com',
    'nacionalidade' => 'Brasil',
    'telefone' => '11972115907'
];

# Da mesma forma que nos arrays numéricos, não devem existir duas chaves iguais,
# nos associativos também não
# Na apresentação não é gerado nenhum erro. O valor a ser definido é sempre o último

$dados = [
    'nome' => 'Carlos',
    'nome' => 'Alexandre'
    
];

echo $dados['nome']; # Alexandre
