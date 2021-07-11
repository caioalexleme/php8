<?php


# GENERATORS

# Um gerador é uma função que permite gerar séries de valores.
# Cada valor é devolvido pela função através da função 'yield'.
# Ao contrário do return, a função yield guarda o estado da função
# Permitindo que a função continue a partir do estado onde ficou na última chamada.

function buscar_numero(){
    for($i = 0; $i < 10; $i++){
        yield $i;
    }
}

# A função geradora funciona como um iterador, podendo ser usada num ciclo
# até que o gerador não tenha mais valores para devolver com o yield
foreach(buscar_numero() as $numero)
{
    echo "$numero<br>";
}


# Os geradores foram introduzidos na versão 5.5 do PHP, 