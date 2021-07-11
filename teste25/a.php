<?php


# STATIC

# A palavra chave static pode ser usada para declarar propriedades e métodos de uma classe qui podem ser acedidos
# sem que seja necessário criar um objeto a partir dessa classe.

class Teste
{
    // instance members - um membro por cada objeto criado a partir dessa classe
    public $nome;
    function teste()
    {
        // Código aqui
    }

    // static ou class members - apenas existentes uma vez na classe
    static $idade;
    static function mover()
    {
        // código aqui
    }
}
