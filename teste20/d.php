<?php

# ESCOPO E CICLO DE VIDA DE UMA VARIÁVEL

# Ao contrário de outras linguagens, no PHP, as variáveis definidas dentro de loops ou instruções condicionais,
# não são destruídas dentro desse escopo.

if (true){
    $a = 10;
}

echo "<p>$a</p>";

for ($i = 0; $i < 10; $i++) {
    $x = 1000;
}

echo "<p>$i e $x</p>";

# Existe ainda outro contexto de escopo de variáveis
# quando essas são definidas dentro de um classe
# passando a ser designadas por propriedades de uma classe