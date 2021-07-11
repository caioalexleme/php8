<?php

# OPERADOR TERNÁRIO

# É um operador que pode substituir uma estrutura simple IF ELSE
# O operador necessita de três expressões ou áreas:
# 1. A expressão que será avaliada como verdadeira
# 2. A expressão que será executada com o true
# 3. A expressão que será executada com o false

$opcao = 0;

$nome = $opcao == 1? 'João' : 'Antônio';

# Podemos usar também da seguinte forma:

$opcao == 1 ? $nome = 'João': $nome = 'Antônio';

# podemos usar o operador ternário em várias situações distintas
# por exemplo, para apresentar um determinado texto

echo $opcao? 'Sim': 'Não';

?>

<!-- Com intrução condicional IF -->
<?php if($opcao == 1): ?>
    <h2>Sim</h2>
<?php else: ?>
    <h2>Não</h2>
<?php endif; ?>


<!-- Com operador ternário -->
<h2><?=$opcao == 1 ? 'Sim': 'Não' ?></h2>

<!-- Por exemplo, para controlar CSS -->
<h2 style="color: <?= $opcao == 1? 'red': 'blue'?>">Este texto tem cor definida pelo PHP</h2>