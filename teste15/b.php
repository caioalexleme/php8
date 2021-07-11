<?php

# DECLARAÇÕES/INTRUÇÕES CONDICIONAIS

# sintaxe alternativa

# normal
$valor = 5;
if($valor == 10){
    // código 1
}else{
    //código 2
}

# alternativa
if($valor == 10):
    //código 1 
else:                           # substituindo chavetas por ':' e o 'endif'
    //código 2
endif;

# switch
switch ($variable):
    case 'value':
        //código 1
        break;
    default:
        //código 2
        break;
endswitch;