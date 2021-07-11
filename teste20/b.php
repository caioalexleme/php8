<?php

# ESCOPO E CICLO DE VIDA DE UMA VARIÁVEL

# Normalmente uma variável PHP passa a existir a partir do local onde é iniciada e existe até o final da página
# No entanto, quando temos variáveis dentro de uma função, elas têm um ciclo de vida limitado.

$variavel = 10;

echo "<p>$variavel</p>";

funcao(20, 30);

echo "<p>$a e $b</p>";      # estas variáveis existem dentro da função, mas não existem fora

function funcao($a, $b)
{
    echo "<p>$variavel</p>";     # esta variável não é reconhecida dentro da função
    echo "<p>$a e $b</p>";
}

function funcao2(){
    $v = 100;
}
funcao2();
echo "<p>$v</p>";