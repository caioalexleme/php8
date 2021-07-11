<?php


# ACCESS LEVEL

# Uma boa prática é criar o menor número de propriedades de uma classe como pública.
# Colocar uma propriedade como publica é expor em demasia essa propriedade.
# Um exemplo: Imaginem que querem que uma propriedade de uma classe seja sempre um número:

class Humano
{
    public $idade;
}

$eu = new Humano();
$eu->idade = 'Olá mundo!';    # Isto é possível porque o PHP não é strongly typed

# Para definir corretamente esse tipo de situações, podemos usar métodos para definir e ir buscar
# os valores das propriedades privadas. Estes métodos permitem garantir que a integridade das prorpriedades seja mantida

class Humano1
{
    private $idade;

}

$eu1->idade = 'Caio';   # Não é possível porquê a propriedade é privada
