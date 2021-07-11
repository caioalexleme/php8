<?php

# HERANÇA | INHERITANCE

# A herannça é o mecanismo através do qual podemos criar classes que herdam propriedades e métodos de outra classe

# A classe inicial a partir da qual outras classes vão ser criadas, é designada por classe base

# Todas as classes que vão herdar propriedades e métodos da classe base são designadas por classes derivadas

# Exemplo (uma classe tradicional):

class Animal
{
    public $especie;
    public $peso;

    function tipoEspecie(){
        return "Este animal é da espécie {$this->especie}";
    }
}

$animal = new Animal();
$animal->especie = 'Mamíferos';
echo $animal->tipoEspecie();