<?php

# CONSTANTES

# DEFINE

# A função define permite definir constantes globais e locais, mas não permite ser usada dentro do contexto de uma classe.

define('APP_NAME', 'Minha aplicação');
define('VERSAO', '1.0.0');
define('MOSTRAR_ERROS', true);
define('PI', 3.14);

echo APP_NAME;
echo '<br>';

# Por norma devemos definir os nomes das constantes sempre com maiúsculas
# Em versões anteriores da linguagem era possível usar um terceiro parâmetro para indicar que a constante era case insensitive. Desde o PHP 7.3esta opção já não é mais válida.

define('CONSTANTE', 100, true);     # ERRO!, porque têm três parâmetros

echo CONSTANTE.'<br>';
// echo constante   # ERRO!, Porquê está pedindo com letras minúsculas