<?php

# CARACTERES DE ESCAPE

echo '<p>Este é um parágrafo de HTML<p>';
echo '<br>';

# Os cararacteres de escape são usados para escrever caracteres especiais,
# como é o caso de alguns símbolos que podem entrar em conflito com o código.

$frase1 = 'I'm going to John's Party!';
$frase2 = "I'm going to John's Party!";

$frase3 = "I'm not sure John "The great" will in this fight.";

# a \ é o símbolo para definir um caracter de escape

$frase1 = 'I\'m going to John\'s Party!';

$frase3 = 'I\'m not sure John "The great" will in this fight.';
$frase3 = "I\'m not sure John \"The great\" will in this fight.";