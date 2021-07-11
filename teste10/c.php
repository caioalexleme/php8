<?php

# No PHP foi introduzido o caracter de escape Unicode.
# Permite apresentar caracteres a partir do seu código hexadecimal

# https://www.utf8-chartable.de/

echo "\u{A9}";
echo "\u{BC}";
echo "\u{AE}";

# Com HTML entities
# https://dev.w3.org/html5/html-author/charref

echo '<br>';
echo '&copy;';
echo '&frac14;';
echo '&reg;';