<?php

# No PHP 7 foi adicionado um novo valor de comparação
# designado por spaceship operator (Tie Fighter do Star Wars)

#               <=>

$x = 1 <=> 1;           # 0 (1 == 1)    Retorna '0' caso valores forem iguais
$x = 3 <=> 2;           # 1 (3 > 2)     Retorna '1' caso o primeiro valor seja maior que o segundo valor
$x = 1 <=> 2;           # -1 (1 < 2)    Retorna '-1' caso o primeiro valor seja menor que o segundo valor