<?php


# IMPORTAR SCRIPTS COM INCLUDE

/*
A grande maioria dos projetos de programação vão sempre necessitar de ter o seu código "partido" em diferentes ficheiros. Salvo raras excepções, um projeto terá dezenas ou centenas de ficheiros para que a aplicação funcione.

É aqui que entram os mecanismos de importação de scripts dentro de outros scripts.

A importação pode ser feita recorrendo ao uso da instrução include

NOTA: O include, à semelhança do echo, são construções especiais do PHP e não requerem a utilização de parêntesis.

*/

include 'config.php';

# Esta instrução vai inserir o código de programação do script config.php dentro do script atual.