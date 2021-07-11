<?php


# CONSTANTS

# O termo const não deve ser aplicados à variáveis locais ou a parâmetros.
# Desde o PHP 5.3, o termo const deve ser aplicado para criar constantes globais.
# Essas constantes são definidas no escopo global do script e ficam automaticamente acessíveis.

const APP_NAME = 'Minha Aplicação';
echo APP_NAME;

echo '<br>';

# dentro de uma função:
function teste()
{
    echo APP_NAME;
}

teste();

# Não é possível concatenar constantes da mesma forma que fazemos com variáveis
echo "<br>nome: APP_NAME, $APP_NAME, {APP_NAME}";

# É necessário fazer uma concatenção tradicional:
echo '<br>Nome: '.APP_NAME;