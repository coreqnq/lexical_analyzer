<?php
/* **************NUMEROS ENTEROS */
$numero = $_REQUEST["numero"];
if (filter_var($numero,FILE_VAIDATE_INT)){
    print "<p> numero entero:$numero.</p>/n";
}else{
    print "no es un numero entero:$numero.</p>/n";
}

?>
