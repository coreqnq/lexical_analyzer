<?php

function pable($input)
{

    if ( $input ==0    || filter_var($input, FILTER_VALIDATE_INT)) {
        $data =  "<p> es un caracter: $input.</p>\n";
        print "<p> es una cadena:$input.</p>\n";
    } else {
    }

    return $data;
}
