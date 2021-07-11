<?php


# CONSTANTES

# Para verificarmos se uma constante já existe
if(!defined('APP_NAME'))
{
    define('APP_NAME', 'Minha app');
}

echo APP_NAME;
echo '<br>';

# ou mais comum ainda
defined('CONSTANTE') or define('CONSTANTE', 'valor');

# Com o  PHP 5.6 passou a ser possível definir uma constante com um array
const NOMES = ['João', 'Ana', 'Carlos'];
echo NOMES[0];
echo '<br>';

# Com PHP 7, passou a ser possível usar arrays no define
define('NAMES', ['João', 'Ana', 'Carlos']);
echo NAMES[2];