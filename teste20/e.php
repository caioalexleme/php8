<?php


# FUNÇÕES ANÔNIMAS

# A partir do PHP 5.3 foram introduzidas as funções anônimas

# Uma função anônima não tem nome e pode ser definida como o valor a atribuir a uma variável

$a = function () {
    echo '<p>Olá mundo!</p>';
};

# Importante: veja como, neste caso, após a chave de fecho da função tem que surgir um ';'

$a();


# ------------------------------------------------------------
# Outro exemplo
$falar = function ($mensagem) {
    echo "<p>Eu digo: $mensagem</p>";
};

$falar('Estou aqui');


# ---------------------------------------------------------------
# e ainda outro exemplo
$andar = function($metros)
{
    return "<p>Andei $metros metros</p>";
};

echo $andar(100);


# ----------------------------------------------------------------
# As funções anônimas são particularmente úteis quando as queremos passar como argumentos para uma função

$a = function()
{
    echo '<p>Função A</p>';
};

function falar($x)
{
    echo $x;
}

falar($a());