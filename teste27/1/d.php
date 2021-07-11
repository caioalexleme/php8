<?php


include 'config.php';

echo NOME_APLICACAO;

# Caminho para o include

/*
Podemos "incluir" um script dentro de outra usando:
1. nenhum caminho e apenas o nome do script a ser incluído;
2. um caminho relativo ao script atual;
3. um caminho absoluto - que indica a localização exata do script no filesystem.

*/

# 1. apenas quando o script a incluir está na mesma pasta do script atual.

# 2. caminho relativo à pasta do script atual

include 'inc/dados.php';
echo '<br>';
echo $nome;

// quando é necessário "Andar para trás" na árvore de pasta que usamos ../

include '../outro_script.php';
echo '<br>';
echo $valor;

# 3. Caminho absoluto

include 'C:/laragon/www/teste27/1/inc/dados2.php';      # Barras substituídas selecionando toda a linha e dandp ctrl + f
echo '<br>';
echo $hoje->format('d-m-y');