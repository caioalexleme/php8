<?php


# CONSTRUCTOR

# O Construtor é um método especial dentro de uma classe que é sempre executado automaticamente quando
# é criado um objeto a partir de uma classe. Este método é definido de uma forma especial com __(dois underscores)
# São chamados métodos mágicos porquê têm uma execução específica ou automática associada.

class Humano
{
    private $nome;
    private $apelido;

    function __construct($n, $a)
    {
        $this->nome = $n;
        $this->apelido = $a;
    }
    public function nome_completo(){
        return $this->nome.' '.$this->apelido;
    }
}

$homem = new Humano('João', 'Ribeiro');
$mulher = new Humano('Ana', 'Martins');

echo $homem->nome_completo();
echo '<br>';
echo $mulher->nome_completo();
