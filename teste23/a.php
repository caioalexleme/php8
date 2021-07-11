<?php


# VAR Keyword

# Tem o mesmo comportamento de public, mas apenas existe por retrocompatibilidade
# devido ao código escrito antes do PHP 5. Não é recomendável usar porque poderá em breve passar a ser não suportado

class Homem
{
    var $nome, $apelido;
}

$eu = new Homem();
$eu->nome = 'Caio';
$eu->apelido = 'Alexandre';