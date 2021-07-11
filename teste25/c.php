<?php


class Operacoes
{
    // Retorna um valor sorteado entre $min e $max
    static function numeroAleatorio($min, $max)
    {
        return rand($min, $max);
    }

    static function calcularFormula($a, $b)
    {// (A x 2) +(B x A)
    return ($a*2) + ($b * $a);
    }

    static function criarUmNome()
    {
        $nomes = ['João', 'Ana', 'Carlos', 'Francisco', 'Rui', 'Nuno'];
        $apelidos = ['Silva', 'Almeida', 'Santos', 'Rodrigues', 'Oliveira'];
        return $nomes[rand(0, count($nomes)-1)].' '.$apelidos[rand(0, count($apelidos)-1)];
    }

}

echo Operacoes::numeroAleatorio(0, 1000);
echo '<br>';
echo Operacoes::calcularFormula(10, 20);
echo '<br>';
echo Operacoes::criarUmNome();