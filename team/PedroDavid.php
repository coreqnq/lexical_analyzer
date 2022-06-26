
<?php


/*$evaluar = " _Num = ( 2 + 4 ) / 3 if ( _Num > 10 ) then ' Ingresaste ' ";
var_dump(Identificador($evaluar));
*/

/* Lógica 1 */
function Identificador($evaluar)
{
    /* LOGICA variables */
    $evaluar = trim($evaluar);
    $data = array();
    $space = [' '];
    /* conjunto x conjunto */
    $buscado = explode(" ", $evaluar);


    foreach ($buscado as $key => $value) {
        //_nag
        if ($value != null) {
            /* Si existe un valor despues del $, se guarda */
            if (isset($value[1])) {
                if ($value[0] == '$') {
                    $data[] = array($value, "Identificador ", $key);
                }
            }
        }
    }
    /* LOGICA digitos,enteros y reales
    $numeros = array();

    $numeros = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
    $separador = '.';


    foreach ($buscado as $key => $value) {

        if ($value != null) {

            if (array_key_exists($value[0], $numeros) == true) {

                $contieneUnPunto = strpos($value, $separador);

                if ($contieneUnPunto == true) {
                    $data[] = array($value, "Número Real", $key);
                } else {
                    if (isset($value[1])) {
                        if ($value[1] != '.') {

                            if (array_key_exists($value[1], $numeros) == true) {
                                $data[] = array($value, "Número Entero", $key);
                            }
                        }
                    } else {

                        $data[] = array($value, "Dígito", $key);
                    }
                }
            }
        }
    } */

    return $data;
}

/* X: LOGICA digitos,enteros y reales */
function Real($evaluar)
{

    $numeros = array();

    $numeros = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
    $separador = '.';
    $space = [' '];

    $evaluar = trim($evaluar);

    $data = array();

    $buscado = explode(" ", $evaluar);


    foreach ($buscado as $key => $value) {

        if ($value != null) {

            if (array_key_exists($value[0], $numeros) == true) {

                /* Número Real */
                $contieneUnPunto = strpos($value, $separador);

                if ($contieneUnPunto == true) {
                    $data[] = array($value, "Número Real", $key);
                } else {
                    /* Número Entero o Dígito */
                    if (isset($value[1])) {
                        if ($value[1] != '.') {

                            if (array_key_exists($value[1], $numeros) == true) {
                                $data[] = array($value, "Número Entero", $key);
                            }
                        }
                    } else {

                        $data[] = array($value, "Dígito", $key);
                    }
                }


                /*  $data[] = array($value, "Dígito", $key); */
            }
        }
    }


    return $data;
}
