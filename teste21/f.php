<?php

# CONSTRUCTOR

# Olhemos para os exemplos

class Humano1
{
    public $nome;
    public $apelido;
}

class Humano2
{
    public function falar()
    {
        // código aqui
    }

    private function andar()
    {
        // método apenas acessível dentro da class
    }

    public function movimento()
    {
        $this->andar();
    }
}

# Podemos ter classe sem qualquer tipo de método e podemos ter classes sem qualquer tipo de propriedade

# Ao instanciar-mos a classe Humano1, podemos aceder diretamente às suas propriedades, pelo facto de 
# estarem identificadas com o acess modifier public

$homem = new Humano1();
$homem->nome = 'joão';
$homem->apelido = 'Ribeiro';

$mulher = new Humano2();
$mulher->andar();     # O erro que é por conta da propriedade 'andar' estar identificada com o acess modifier como 'private'
$mulher->movimento(); # Nesse caso como 'movimento' estar identificada como 'public', na função realiza a function 'andar'