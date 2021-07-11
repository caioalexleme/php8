<?php

# BREAK, CONTINUE E GOTO

# Existem duas funções especiais dentro dos loops: break e continue

# BREAK
# Serve para interromper a execução de um loop

for($i = 0; $i < 20; $i++){
    echo $i. '<br>';
    if($i == 10){
        break;
    }
}

echo '<hr>';

$nomes = ['João', 'Ana', 'Carlos'];
foreach($nomes as $nome){
    echo $nome . '<br>';
    if($nome == 'Ana'){
        break;
    }
}

echo '<hr>';

# CONTINUE
# Permite avançar um volta do ciclo ignorandoo código que deveria ser executado

for($i = 0; $i < 20; $i ++){
    if($i == 10){
        continue;
    }
    echo $i . '<br>';
}

echo '<hr>';

$nomes = ['João', 'Ana', 'Carlos'];
foreach($nomes as $nome){
    if($nome == 'Ana'){
        continue;
    }
    echo $nome . '<br>';
}

echo '<hr>';

# GOTO
# É muito pouco usado porque torna a leitura do código mais complexa.
# Foi introduzido no PHP 5.3 e permite sair do loop e ir para uma linha de código
# definida por um label (nome seguido de :)

for($i = 0; $i < 20; $i++){
    if($i == 10){
        goto teste;
    }
    echo $i . '<br>';
}

echo 'Fim do jogo';

teste:
echo 'AQUI';