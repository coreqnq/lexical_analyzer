
<?php


/*$evaluar = " _Num = ( 2 + 4 ) / 3 if ( _Num > 10 ) then ' Ingresaste ' ";


var_dump(Identificador($evaluar));

*/

/* Lógica */
function Identificador($evaluar)
{
    $data = array();

    /* conjunto x conjunto */
    $buscado = explode(" ", $evaluar);

    foreach ($buscado as $key => $value) {
        //_nag
        if ($value[0] == '$') {
            /*  var_dump($value); */
            /*  array_push($data, $value); */
            $data[] = array($value, "Identificador ", $key);
        }
    }


    /*  var_dump($data); */
    return $data;
}
