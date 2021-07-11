<?php


# HERANÇA | INHERITANCE

# Para herdar uma classe a partir de outra, usamos a expressão 'extends'

# Exemplo (uma classe base):

class Animais
{
    public $especie;
    public $peso;

    function tipoEspecie()
    {
        return "Este animal é da espécie {$this->especie}";
    }
}

# Exemplo (uma classe com herança):
class Mamifero extends Animais
{
    // Não é necessário voltar a definir as propriedades e métodos que ja existem na classe base
    // podemos acrescentar outras propriedades e outros métodos

    public $quantidade_pernas;
    public $tem_pelo;

    function temQuantasPernas()
    {
        return "O animal da espécie {$this->especie} tem {$this->quantidade_pernas}";
    }
}

$mamifero = new Mamifero();
$mamifero->especie = 'Cavalo';
$mamifero->quantidade_pernas = 4;
echo $mamifero->temQuantasPernas();