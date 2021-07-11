<?php

# No PHP 8 foram mais algumas funções para usar com strings

# str_contains()
$nome = 'Ana Maria Silva Cardoso';
$x = str_contains($nome, 'Silva');  #true

# str_starts_with
$x = str_starts_with($nome, 'Ana');     # true
$x = str_starts_with($nome, 'ana');     # false

# str_ends_with
$x = str_ends_with($nome, 'oso');       # true
$x = str_ends_with($nome, ' oso');      # false