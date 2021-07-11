<?php
 

# INCLUDE_ONCE E REQUIRE_ONCE

/*
A expressão include_once funciona exatamente como o include, no entanto se o script ja foi anteriormente incluído, o PHP não volta a incluir

*/

include_once 'config.php';
echo 'AAA';
include_once 'config.php';
echo 'BBB';

/*
No caso do require_once, funciona exatamente como o require, mas com o mesmo comportamento do include_once: Se o ficheiro ja foi importado anteriormente, não voltará a ser incorporado.

*/

require_once 'config.php';
echo 'CCC';
require_once 'config.php';
echo 'DDD';