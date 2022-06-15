<?php
/* IDENTIFICADOR: VARIABLE */
//length_Num_=(2+4)/3 if (_Num_>10) then 'Ingresaste'";


/* $buscado = explode(" ", $evaluar); */
//echo Identificador($buscado, $sql, $msg);
/* $evaluar = " _nag = ( 2 + 4 ) / 3 if ( _Num > 10 ) then ' Ingresaste '";
echo var_dump(Identificador($evaluar)); */
/* Lógica */
function Identificador($evaluar)
{
    // $evaluar = " _nag = ( 2 + 4 ) / 3 if ( _Num > 10 ) then ' Ingresaste '";
    /* letra por letra */
    /*  $buscado = str_split($evaluar); */

    $data =  array();
    $mayusculas =  ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
    $minusculas = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
    /* $ignorar =  [1, 2, 3, 4, 5, 6, 7, 8, 9, 0]; */
    $operators = array_merge($minusculas, $mayusculas);

    /* analisame todo el array que debe coincidir por letra */

    foreach ($operators as $operator) {
        /* me da la position del que coincide*/
        $position  =  strpos($evaluar, $operator);
        /* si se encuentra una valor identico es true */
        if ($position !== false) {
            /* este */
            /* var_dump($position); */
            /*  var_dump($operator); */
            /*   $alm[$position] =  array($operator, 'identificador', $operator); */
            if (!is_null($operator)) {
                $data[] = array($operator, 'identificador', $position);
            }
            $operator = null;
        }
    }
    return $data;
}
