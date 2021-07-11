<?php


# TRAITS

/*
São um grupo de métodos que podem ser inseridos dentro de classes.
Foram aadicionados a linguagem na sua versão 5.4 para aumentar a reutilização de código.

Os traits são definidos com a expressão trait, seguido pelo nome e por um bloco de código. As regras para dar nome as traits são as mesmas que usamos nas classes.

*/

trait MinhasHabilidades
{
    public function falar($mensagem)
    {
    echo "Eu digo: $mensagem";
    }

    public function saltar($metros)
    {
        echo "Eu salto $metros metros";
    }
}

# As classes que necessitarem usar esses métodos dos trait, apenas terão que ter o seguinte:
class Humano
{
    use MinhasHabilidades;
}

$h = new Humano();
$h->falar('Olá mundo!');
echo '<br>';
$h->saltar(3);