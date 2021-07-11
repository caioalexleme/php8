<?php


class Tempo
{
    private $segundos;

    // --------------------------------------
    function setSegundos($valor)
    {
        if(!is_numeric($valor) || $valor < 0)
        {
            $this->segundos = 0;
        }
        else
        {
            $this->segundos = $valor;
        }
    }

    // ------------------------------
    function getMinutos($valor)
    {
        return $this->segundos / 60;
    }

    // ----------------------------------

    function setMinutos($valor)
    {
        if($valor == 0)
        {
            $this->segundos = 0;
        }
        else
        {
            $this->segundos = $valor * 60;
        }
    }
}

