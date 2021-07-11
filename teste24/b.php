<?php


# ACCESS LEVEL - Aspectos importantes a reter

class Humano3
{
    private $idade = 0;

    public function setIdade($valor)
    {
        // verifica se o valor é numérico
        if(is_numeric($valor))
        {
            $this->idade = $valor;
        }
    }
    
    public function getIdade()
    {
        return $this->idade;
    }
}

$eu2 = new Humano3();
$eu2->setIdade('João');
$eu2->getIdade();
