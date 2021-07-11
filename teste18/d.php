<?php

#CICLOS/LOOPS

# FOREACH

# É um ciclo especialmente concebido para fazer uma iteração pelo valores de um array

$nomes = ['Caio', 'Vânia', 'Johnson'];
foreach($nomes as $nome){
    echo $nome . '<br>';
}

echo '<hr>';

# existe ainda uma outra assinatura que permite buscar a chave e o valor de um array

$capitais = [
    'Brasil' => 'Brasília',
    'Portugal' => 'Lisboa',
    'Espanha' => 'Madrid'
];

foreach($capitais as $chave => $valor){
    echo "A capital do país $chave é $valor<br>";
}