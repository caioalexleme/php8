<?php

# CLASSES

# Para aceder as propriedades de uma classe, dentro dos métodos da classe,
# é usada a pseudo varriável $this seguida do operador seta ->

class Humano{
    public $nome = 'João';
    public $apelido = 'Ribeiro';

    public function nomeCompleto(){
        return $this->nome.' '.$this->apelido;
    }
}

# As classes recorrem a utilização de Acess Modifiers - Níveis de acesso
# Os níveis de acesso aos dados indicam se podemos ver os dados apenas dentro da classe
# se os podemos ver fora da classe ou se estão protegidos por algum motivo extra.
# Veremos mais à frente como estas informações são importantes.

# INSTANCIAR UM OBJETO

# Um objeto é uma variável criada a partir de uma classe.
# Instanciar um objeto significa criar um objeto a partir de uma classe atribuindo
# à variável a expressão new e o nome da classe.

$homem = new Humano();

# Veremos depois o porquê dos parênteses

# com a implementação anterior podemos agora aceder às propriedades e métodos

echo $homem->nomeCompleto();    # João Ribeiro

# Tal como acontece com as funções, os objetos podem ser instanciados mesmo
# se a definição da classe aparecer mais abaixo no script.