<?php


# FINAL

# Para impedir que uma classe derivada possa fazer override de métodos podemos utilizar a expressão FINAL da seguinte forma:

class Veiculo
{
    final function mover()
    {
        // código aqui
    }
}

class Bicicleta extends Veiculo
{
    function mover()
    {
        // override do código original
    }
}

# Podemos, inclusive, definir uma class como não sendo passível de ser herdada colocando FINAL antes de CLASS

final class Humano
{
    // código aqui
    function teste()
    {
        echo 'teste';
    }
}

class Homem extends Humano
{
    // código aqui
}

$a = new Homem();
$a->teste();
