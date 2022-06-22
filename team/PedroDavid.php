<?php

/* $evaluar = " _nag = ( 2 + 4 ) / 3 if ( _Numero > 10 ) then ' Ingresaste '";
/* $evaluar = " _nag _num 56 _nag {}";
/* _nag _num 56 _nag {} then if => <";
var_dump(Identificador($evaluar)); */

function Identificador($evaluar)
{
    $mayusculas =  ['_', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
    $minusculas = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];

    $operators = array_merge($minusculas, $mayusculas);

    /* analisame todo el array que debe coincidir por letra */
    /*  $bus = array(); $bus=[]; */
    $bus = str_split($evaluar);

    $alm =  array();
    $alm[] = preg_replace("/[[:space:]]/", "", trim($evaluar));

    $datosAlmacenados =  array();

    /*    for ($i = 0; $i < count($operators); $i++) {
    for ($i = 0; $i < 12; $i++) { */
    for ($i = 0; $i < count($operators); $i++) {

        if ($bus[$i] == '_') {
            array_push($datosAlmacenados, "<br/>" . $bus[$i]);
            if ($bus[$i + 1] !== ' ') {
                array_push($datosAlmacenados, $bus[$i + 1]);
                if ($bus[$i + 2] !== ' ') {
                    array_push($datosAlmacenados, $bus[$i + 2]);
                    if ($bus[$i + 3] !== ' ') {
                        array_push($datosAlmacenados, $bus[$i + 3]);
                        if ($bus[$i + 4] !== ' ') {
                            array_push($datosAlmacenados, $bus[$i + 4]);
                            if ($bus[$i + 5] !== ' ') {
                                array_push($datosAlmacenados, $bus[$i + 5]);
                                if ($bus[$i + 6] !== ' ') {
                                    array_push($datosAlmacenados, $bus[$i + 6]);
                                    if ($bus[$i + 7] !== ' ') {
                                        array_push($datosAlmacenados, $bus[$i + 7]);
                                    }
                                }
                            }
                        }
                    }
                }
            }
        } elseif ($bus[$i] == null) {
            break;
        }
        /*  */
    }
    $arr = "";
    $data =  array();
    $key = array();
    foreach ($datosAlmacenados as $key => $caracter) {

        $arr .= $caracter;
    }
    if ($key == true) {
        $data[] = array($arr, "Identificador ", $key);
    } else {
        $data[] = array("No hay alguna variable", "No especificado ", -1);
    }


    return $data;
}
