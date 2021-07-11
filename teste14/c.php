<?php

# DECLARAÇÕES/INSTRUÇÕES CONDICIONAIS

# Uso de operadores lógicos

$numero = 30;
if($numero > 10 && $numero != 30){
    // executar o cógigo
}else{
    // executar o cógigo
}


# condições dentro de condições
$numero = 10;
if($numero >= 0){
    if($numero >= 100){
        echo 'O número é maior ou igual a 100';
    }else{
        echo 'O número é positivo, mas inferior a 100';
    }
}else{
    echo 'O número é negativo';
}