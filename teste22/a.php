<?php


# ACCESS LEVELS - NÍVEIS DE ACESSO

# Existem três tipos de níveis de acesso a eleentos dentro de uma class.
# public, protected e private

class MinhaClasse
{
    public $v1;
    protected $v2;
    private $v3;
}

$a = new MinhaClasse();
$a->v1 = '111';    # possível
$a->v2 = '222';    # não é possível. Resultado em erro.
$a->v3 = '333';    # não é possível. Resultado em erro.

# porquê?

# PUBLIC

# Os membros públicos (propriedades ou métodos) de uma classe, estão sempre acessíveis.
# Se criarmos um objeto a partir da classe, temos acesso direto a esses elementos.

class TudoPublico
{
    public $propriedade;

    public function metodo()
    {
        echo 'Método publico';
    }
}

$obj1 = new TudoPublico();
$obj1->propriedade = 'a';
$obj1->metodo();