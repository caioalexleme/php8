<?php


# COSTANTS

# As constantes são variáveis cujo valor atribuído na sua definição não pode ser alterado ao longo do script de PHP
# O PHP permite definir constantes de duas formas: com o termo const e como o método define

# CONST

# O const é usado para definir constantes no contexto de classes.
# Ao contrário das propriedades public, protected ou private, as propriedades const estão sempre visíveis (são públicas)
# Como não podem ser alteradas no valor, não existe o risco de ficarem expostas.

# Para definir uma constante, o nome deve ser sempre em maiúsculas podendo ser usados _ (underscores)
# Não é necessário o sinal do dólar como nas variáveis normais.

class Circulo
{
    const PI = 3.14;    # Todas as constantes tem o valor atribuído sempre que são definidas
}

// É possível apresentar sem instanciar
echo Circulo::PI;

echo '<br>';

# Ou com instanciação:
$c = new Circulo();
echo $c::PI;