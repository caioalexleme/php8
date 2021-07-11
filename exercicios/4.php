<?php

# 'a' é igual a 100
# 'b' é igual a 250
# 'c' é igual a 'a' mais 'b'
# acrescentar mais uma unidade a 'c'
# apresentar 'c'

# resultado será 351

$a = 100;
$b = 250;
$c = $a + $b;
echo ++$c;

echo '<br>';
$c = 0;

echo $c = $a + $b + 1;