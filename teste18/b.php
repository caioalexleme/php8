<?php

# CICLOS/LOOPS

# DO WHILE
# É muito semelhante ao ciclo WHILE, contudo, neste caso a execução é avaliada após a execução do ciclo

$x = 0;
do{
    echo $x++ . '<br>';
}while($x < 10);

echo '<hr>';

# E de igual modo, quando só temos uma expressão a executar, podemos ignorar as chaves

do
    echo $x++ . '<br>';
    while($x < 20);


echo '<hr>';

# Código de cima em apenas uma linha (não recomendado por dificuldade de interpretação)
do echo $x++ . '<br>'; while($x < 30);