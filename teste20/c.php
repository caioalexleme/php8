<?php


# ESCOPO E CICLO  DE VIDA DE UMA VARIÁVEL

# GLOBAL

# -----------------------------------------------------------------
# Neste exmplo, a variável $a existe em dois escopos diferentes
$a = 10;

function funcao()
{
    global $a;
    $a = 20;
}
funcao();
echo "<p>$a</p>";

# ------------------------------------------------------------------
# Outro exemplo
$b = 100;

function funcao2()
{
    $GLOBALS['b'] = 200;
}
funcao2();
echo "<p>$b</p>";