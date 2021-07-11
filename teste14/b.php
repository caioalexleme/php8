<?php

# DECLARAÇÕES/INSTRUÇÕES CONDICIONAIS

# Declaração IF - define blocos de código que só são executados se a condição for verdadeira (true)

$nome = 'João';
if($nome == 'João'){
    echo 'Foi identificado o nome do autor do vídeo';
}

# IF ... ELSE
$idade = 18;
if($idade <= 18){
    echo 'Adolescente';
} else {
    echo 'Adulto';
}

# IF ... ELSEIF ... ELSE
$nota = 5;
if($nota <= 2){
    echo 'Nota fraca';
} elseif($nota <= 4){
    echo 'Nota insuficiente';
}elseif($nota <= 6){
    echo 'Nota Positiva';
}elseif($nota <= 8){
    echo 'Nota muito positiva';
}else{
    echo 'Nota excelente';
}

# Podemos deixar de usar as chavetas/chaves, se só existir uma instrução no bloco:
$nota = 5;
if($nota <= 2)
    echo 'Nota fraca';
elseif($nota <= 4)
    echo 'Nota insuficiente';
elseif($nota <= 6)
    echo 'Nota Positiva';
elseif($nota <= 8)
    echo 'Nota muito positiva';
else
    echo 'Nota excelente';


# Caso haja mais de uma instrução no bloco é necessário o uso das chavetas/chaves:
$nota = 2;
if($nota <= 2){
    echo 'Nota fraca';
    echo 'Reportar ao diretor da escola';
}
elseif($nota <= 4)
    echo 'Nota insuficiente';
elseif($nota <= 6)
    echo 'Nota Positiva';
elseif($nota <= 8)
    echo 'Nota muito positiva';
else
    echo 'Nota excelente';