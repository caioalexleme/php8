<?php

# CICLOS/LOOPS
# Existem 4 estruturas de ciclos em PHP
# Elas existem apenas para permitir executar um determinado bloco de códigos várias vezes

# WHILE
# Definimos a condição durante a qual o ciclo deve continuar a ser executado.
# Quando essa condição for falsa, o ciclo termina e o código avança
 
$x = 1;
while($x < 10){
    echo 'ciclo em execução <br>';
    $x++;
}
echo '<hr>';

# outro exemplo
$i = 0;
while($i < 10){
    echo $i++ . '<br>';
}
echo '<hr>';

# neste caso podemos remover as chaves/chavetas por conta de termos apenas uma expressão no while

while($i < 20) echo $i++ . '<br>';

# IMPORTANTE: Nunca esquecer da alteração da condição, caso contrário teremos um ciclo infinito