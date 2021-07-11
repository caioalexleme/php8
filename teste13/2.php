<?php

# ARRAYS MULTIDIMENSIONAIS

# São arrays, numéricos ou associativos, cujos valores são outros arrays
# Exemplo

$dados = [
    [10, 20, 30, 40],
    [100, 200, 300, 400],
    [1000, 2000, 3000, 4000],
    
];

# neste caso para apresentar-mos valores deste array

echo $dados[1][2];      # 300
echo $dados[0][3];      # 40

# Podemos ter arrays multidimensionais associativos

$cidades = [
    'Portugal' => ['Lisboa', 'Porto', 'Coimbra'],
    'Brasil' => ['Brasília', 'São Paulo', 'Rio de Janeiro'],
    'Espanha' => ['Madrid', 'Barcelona', 'Sevilha']
];

echo $cidades['Brasil'][1];
echo $cidades['Espanha'][0];
echo $cidades['Portugal'][2];

# Os arrays podem ter mais do que duas dimensões