<?php

# CLASSES ANÔNIMAS

# No PHP 7 foi introduzido um conceito usado noutras linguagens
# e que se designa por classes anônimas. Este tipo de classe só faz sentido
# quando queremos instanciar apenas um objeto dessa classe

# Exemplo "nomal"

class Objeto1
{
    function teste()
    {
        echo "teste - Normal";
    }
}

$a = new Objeto1();


# Exemplo com classes anônimas
$b = new class
{
    function teste()
    {
        echo "teste - classe anônima";
    }
};      # NOTA: é importante notar que tem que fechar o código com ;

$a->teste();
echo '<br>';
$b->teste();

