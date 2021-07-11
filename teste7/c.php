<?php

# valores são diferentes?
$a = (2 != 3);              # true
$a = (2 <> 3);              # true (alternativo)
$a = (50 != 50);            # false
$a = (50 != '50');          # false
$a = (50 !== '50');         # true

# operadores de comparação com 3 símbolos, comparam valor e tipo de valor
# ===
# !==