<?php

# HEREDOC e NOWDOC (outras formas de delimitação)
# Apesar de não serem muito comuns, podem ser usadas para tratamento de maiores blocos de texto

# HEREDOC - permite fazer o Parse de variáveis

$cliente = 'João Ribeiro';
$email = 'joao.ribeiro@gmail.com';

$texto = <<<LABEL
Olá, sr. $cliente.
Serve a presente mensagem para informar que se encontra inscrito no próximo concurso.
Enviamos o regulamento para o seu email $email
Obrigado pela sua simpatia 
LABEL;

echo $texto;

echo '<br>';


#NOWDOC - não permite Parse de variáveis
$texto = <<<'LABEL'
Olá, sr. $cliente.
Serve a presente mensagem para informar que se encontra inscrito no próximo concurso.
Enviamos o regulamento para o seu email $email
Obrigado pela sua simpatia 
LABEL;

echo $texto;