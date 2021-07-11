<?php

# CICLOS/LOOPS

#FOR

# Permite executar um bloco de código determinado número de vezes;
# É constituído por três parâmetros
# 1. O iniciador - Indica o valor inicial do contador
# 2. A condição - Indica qual a condição para que o ciclo termine
# 3. O incremento - Altera o valor do contador a cada ciclo

for($x = 1; $x < 10; $x++){
    echo $x . '<br>';
}

echo '<hr>';

# Mais uma vez, se for executada apenas uma expressão, não é necessário usar chaves/chavetas
for($x = 1; $x<10; $x++)
    echo $x . '<br>';

echo '<hr>';
# Pode conter uma assinatura diferente
$i = 1;
for(; $i < 10;){
echo $i++ . '<br>';
}

echo '<hr>';
# O primeiro e último parâmetro também podem ser divididos em vários parâmetros usando a vírgula como separador
for($contador = 1, $x = 10;$contador < 10; $contador ++, $x--){
    echo $x . '<br>';
}

echo '<hr>';
# por exemplo, podemos apresentar todos os dados de um array
$nomes = ['Caio', 'Vânia', 'Johnson'];
for($i = 0; $i < sizeof($nomes); $i++){         # 'sizeof' é um 'alias(apelido)' de 'count', portanto se usarmos
    echo $nomes[$i] . '<br>';                   # 'count' no lugar o resultado seria o mesmo, estas funções contam
}                                               # o número de índices do array, neste caso são 3 [0, 1, 2]