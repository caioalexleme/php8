<?php


# ACCESS LEVELS - PROTECTED

# Um elemento protected pode ser alcançado dentro da classe e dentro de uma qualquer classe que seja uma extensão de outra classe

class ClasseTeste
{
    public $publica = "a";
    protected $protegida = "b";
    private $privada = "c";
}

class ClasseDerivada extends ClasseTeste
{
    function teste()
    {
        echo $this->publica;        # possível
        echo $this->protegida;      # Possível
        echo $this->privada;        # Erro!
    }
}

$a = new ClasseTeste;
$a->publica = '1';      # possível
$a->protegida = '2';    # gera erro
$a->privada = '3';      # gera erro

$b = new ClasseDerivada;
$b->publica = '1';      # possível
$b->protegida = '2';    # gera erro
$b->privada = '3';      # gera erro

$b->teste();


# PRIVATE

# Só pode ser visível dentro da própria classe
# Não é visível nos objetos instanciados nem noutras classes herdadas

# --------------
# Ao contrário das propriedades, os métodos não necessitam de ter um nível de acesso especificado claramente.
# Se não for identificado, por defeito o método é público.

class Teste
{   
    private $valor = 'a';

    function mover()    # Mesma coisa que escrever: 'public function mover();'
    {
        // código aqui
        echo $this->valor;
    }
}

$a = new Teste;
$a->mover();        # possível
$a->valor = '1';    # erro
