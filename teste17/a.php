<?php

# EXPRESSÃO MATCH

# No PHP 8 foi introduzida uma nova expressão condicional designada po Match
# É muito semelhante ao Switch, mas com uma sintaxe mais concisa

# ----------------------------------------
# com switch
$x = 10;
switch ($x){
    case 5:
        echo 'Parou no 5';
        break;
    case 10:
        echo 'Parou no 10';
        break;
    case 15:
        echo 'Parou no 15';
        break;
    default:
        echo 'É um número diferente de 5, 10 ou 15';
        
}

echo '<hr>';

# com match
echo match($x){
    5 => 'Parou no 5',
    10 => 'Parou no 10',
    15 => 'Parou no 15',
    default => 'É um número diferente de 5, 10 ou  15'
};

echo '<hr>';

# No match apenas uma expressão de output é valida por cada condição
# E é possível executar a mesma operação para várias condições

$opcao = match($x){
    2 => 'é 2',
    4, 5, 6 => 'é 4, 5 ou 6', 
    default => 'é outro valor'
};
echo $opcao;
echo '<hr>';

# no switch também é possível
switch($opcao){
    case 2:
        echo 'é 2';
        break;
    case 4:
    case 5:
    case 6:
        echo 'é 4, 5 ou 6';
        break;
    default:
        echo 'é outro valor';
}
echo '<hr>';

# IMPORTANTE
# No switch, as comparações podem ser feitas só por valor (==)
# No caso do match, são sempre feitas por valor e tipo (===)

$x = '1';
switch($x){
    case 1:
        echo 'inteiro'; break;
    case '1':
        echo 'string';
}   # Neste caso o output do switch é 'inteiro' por conta do switch avaliar apenas valor (==)
echo '<hr>';

echo match($x){
    1 => 'inteiro',
    '1' => 'string'
};  # Neste caso o output do match é 'string' por conta do match avaliar valor e tipo (===)