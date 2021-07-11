<?php


# CLASSES ABSTRATAS

# Uma classe abstrata é constituída por uma implementação parcial a partir da qual outras classes podem crescer

# Quando uma classe é declarada como abstrata , isso significa que ela tem métodos incompletos que , obrigatoriamente
# têm que ser implementados nas classes que a herdam

# As classes abrstratas não podem ser instanciadas. Servem apenas para serem herdadas por outras classes.

abstract class Forma
{
    public $largura = 100;
    public $altura = 200;
    
    abstract public function area();

    function altura()
    {
        return $this->altura;
    }
}

// $quadrado = new Forma();  # Isto não é permitido

class Retangulo extends Forma
{
    public function area()
    {
        return $this->largura * $this->altura;
    }
}

$r = new Retangulo();
echo $r->area();
echo '<br>';
echo $r->altura();

/*
Uma classe abstrata permite então uma implementação parcial de métodos ea definição de um modelo de implementação de outros métodos. Isto permite em modelos de programação orientada a objetos, juntamente com outro mecanismo designado por interfaces, a estrutura do código que segue os melhores padrões de escrita.

É uma matéria fundamentalmente destinada a quem constrói código para ser implementado por outros programadores.

*/