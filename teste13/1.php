<?php

# ARRAY MISTOS (MIXED ARRAYS)

# É possível criar um array que combina índices numéricos e string
# Embora não seja de necessidade muito frequente, é possível da seguinte forma:

$dados = [
    0 => 10,
    'nome' => 'Antônio',
    'apelido' => 'Silva',
    10 => 1000,
    11 => 'Rua de Lisboa',
    12 => 'Portugal'
];

# Uma extrutura desta é mais complexa de gerir
# devido a mistura de índices e tipos de dados

# Para apresentar dados do array, procedemos da mesma forma:

echo $dados[0];             # 10
echo $dados['apelido'];     # Silva
