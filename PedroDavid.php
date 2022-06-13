<?php
/* IDENTIFICADOR: VARIABLE */
$sql = " ";
$evaluar = "_Num_=(2+4)/3 if (_Num_>10) then 'Ingresaste'";
$buscado = str_split($evaluar);
$msg = " ";
/* $buscado = explode(" ", $evaluar); */
echo Identificador($buscado, $sql, $msg);

/* Lógica */
function Identificador($buscado, $sql, $msg)
{
    $analisis =  ['_', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];

    /* Si la variable existe */
    if (isset($buscado[1])) {
        /* la variable inicia con un '_' */
        if ($buscado[0] == "_") {
            /* Recorre todos los caracteres de $evaluar */
            for ($i = 0; $i < count($buscado); $i++) {
                /* si algun caracter ingresado es diferente al array !analisis */

                for ($x = 0; $x < count($analisis); $x++) {
                    if ($buscado[$i] == $analisis[$x]) {

                        /*   TODAS LAS VARIABLES
                         if ($buscado[$i] == 0 || $buscado[$i] == 1 || $buscado[$i] == 2 || $buscado[$i] == 3 || $buscado[$i] == 4 || $buscado[$i] == 5 || $buscado[$i] == 6 || $buscado[$i] == 7 || $buscado[$i] == 8 || $buscado[$i] == 9) {

                    break;
                } */
                        /* Concatenating the value of [] to the end of the string . */
                        $sql .= $buscado[$i];
                    }
                }
                /*   la 1ra DE LAS VARIABLES    */
                if ($buscado[$i] == 0 || $buscado[$i] == 1 || $buscado[$i] == 2 || $buscado[$i] == 3 || $buscado[$i] == 4 || $buscado[$i] == 5 || $buscado[$i] == 6 || $buscado[$i] == 7 || $buscado[$i] == 8 || $buscado[$i] == 9) {

                    break;
                }
            }
        }
        $msg .= " Identificador ";
    }
    return $sql . " Es " . $msg;
}
/* var_dump($buscado[0]); */
