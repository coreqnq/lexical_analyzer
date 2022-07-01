<?php
function Cadena_Caracter($evaluar)
{ 
  // $mayusculas =  ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
  // $minusculas = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
  // //$numeros = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
  // $letras = array_merge($minusculas, $mayusculas);

  // $evaluar = trim($evaluar);

  // $separador= ' ';

   
  //   $key = null;

  //   $stringEval = explode(" ", $evaluar);

  //   foreach ($stringEval as $rowWord) {
        

  //       if (in_array($rowWord, $letras, true)) {
  //           $key = array_search($rowWord, $stringEval);
  //       }
  //       if (!is_null($key)) {
  //           $data[] = array($rowWord, 'Caracter', $key);
  //       }
  //       $key = null;
  //   }
  $data = [];
  $large=strlen($evaluar);
  $key = null;
  if($large==1){
    $data[] = array($evaluar, 'Caracter', $key);
  }
  else{
    $data[] = array($evaluar, 'Cadena', $key);
  }

  return $data;
}
?>