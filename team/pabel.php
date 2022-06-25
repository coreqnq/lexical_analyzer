<?php

function Real($evaluar)
{

    $numeros = array();

    $numeros = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
    $separador = '.';
    $space = [' '];
    $caracter=[this,theme]; 
    $cadena=[char]; 


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
            }
            if (array_key_exists($value[0],
                    $cadena ) == true) {

                /* cadena */
                $contieneUnPunto = strpos($value, $separador);

                if ($contieneUnPunto == true) {
                    $data[] = array($value, "es una cadena", $key);
                } else {
                    /* caracter */
                    if (isset($value[1])) {
                        if ($value[1] != '.') {

                            if (array_key_exists($value[1],$caracter ) == true) {
                                $data[] = array($value, "es un carcater", $key);
                            }
                        }
                    } else {

                        $data[] = array($value, "Dígito", $key);
                    }
                }
            }
            
        }
    }

    return $data;
}
?>
