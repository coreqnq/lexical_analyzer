<?php
/* var_dump(Identificador($evaluar)); */

function Identificador($evaluar)
{
    $mayusculas =  ['_', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
    $minusculas = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];

    $operators = array_merge($minusculas, $mayusculas);

    /* analisame todo el array que debe coincidir por letra */

    $bus = str_split($evaluar);
    $alm =  array();
    $alm[] = preg_replace("/[[:space:]]/", "", trim($evaluar));

    $data =  array();
    $datosAlmacenados =  array();

    for ($i = 0; $i < count($operators); $i++) {
        /*  */
        if ($bus[$i] == '_') {
            /* array_push($datosAlmacenados, "<br/>" . $bus[$i]); */
            $datosAlmacenados[] = array("<br/>" . $bus[$i], 'identificador', $i);
            if ($bus[$i + 1] !== ' ') {
                /* array_push($datosAlmacenados, $bus[$i + 1]); */
                $datosAlmacenados[] = array($bus[$i + 1], 'identificador', $i);
                if ($bus[$i + 2] !== ' ') {
                    /* array_push($datosAlmacenados, $bus[$i + 2]); */
                    $datosAlmacenados[] = array($bus[$i + 2], 'identificador', $i);
                    if ($bus[$i + 3] !== ' ') {
                        /* array_push($datosAlmacenados, $bus[$i + 3]); */
                        $datosAlmacenados[] = array($bus[$i + 3], 'identificador', $i);
                        if ($bus[$i + 4] !== ' ') {
                            /* array_push($datosAlmacenados, $bus[$i + 4]); */
                            $datosAlmacenados[] = array($bus[$i + 4], 'identificador', $i);
                            if ($bus[$i + 5] !== ' ') {
                                /*   array_push($datosAlmacenados, $bus[$i + 5]); */
                                $datosAlmacenados[] = array($bus[$i + 5], 'identificador', $i);
                                if ($bus[$i + 6] !== ' ') {
                                    /*   array_push($datosAlmacenados, $bus[$i + 6]); */
                                    /*  $datosAlmacenados[] = array($bus[$i + 6], 'identificador', $i); */
                                    $datosAlmacenados[] = array($bus[$i + 6], 'identificador', $i);
                                    if ($bus[$i + 7] !== ' ') {
                                        /*    array_push($datosAlmacenados, $bus[$i + 7]); */
                                        $datosAlmacenados[] = array($bus[$i + 7], 'identificador', $i);
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        /*  */
    }
    return $datosAlmacenados;
}
