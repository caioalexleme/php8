<?php


# OVERRIDE

# Para além do conceito de classe base e classe derivada, temos o conceito de parent class (classe pai)
# É a classe a partir da qual fazemos a derivação

# Vamos ver um exemplo com o contrutor deste tipo de classes

class Rectangulo
{
    public $largura, $altura;
    function __construct($l, $a)
    {
        $this->largura = $l;
        $this->altura = $a;
    }
    function calcularArea()
    {
        return $this->largura * $this->altura; 
    }
}

class Quadrado extends Rectangulo
{
    function __construct($l)
    {
        $this->largura = $l;
        $this->altura = $l;     
    }
}

$rect = new Rectangulo(10, 20);
$quad = new Quadrado(10);

echo $rect->calcularArea();
echo '<br>';
echo $quad->calcularArea();
echo '<br>';

# Mas podemos chamar o construtor da class base usando a expressão parent

class Quadrado1 extends Rectangulo
{
    function __construct($l)
    {
        parent::__construct($l, $l);
    }
}

$quad1 = new Quadrado1(5);
echo $quad1->calcularArea();

# A expressão parent é um nome alternativo ao nome da classe base
# Podemos fazer também da seguinte forma:

class Quadrado2 extends Rectangulo
{
    function __construct($l)
    {
        Rectangulo::__construct($l, $l);       
    }
}

echo '<br>';
$quad2 = new Quadrado2(6);
echo $quad2->calcularArea();