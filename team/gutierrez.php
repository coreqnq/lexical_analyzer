<?php

//$input = '$result = a + b * c >= d';

function searchOperators($input): array
{
    $comparisonOperators = array('>', '>=', '<', '<=', '==', '<>', '!=');
    $assignmentOperators = array('=');
    $arithmeticOperators = array('+', '-', '*', '/', '%', '^', '**');
//    $space = array('');
    $operators = array_merge($comparisonOperators, $assignmentOperators, $arithmeticOperators);
    // $explodedInput = str_split($input);

    $tree = array();

    foreach ($operators as $operator) {
        $position = strpos($input, $operator);
        if ($position !== false) {
            $tree[$position] = $operator;
        }
    }

    $result = array();

    foreach ($tree as $key => $value) {
        $result[] = array($value , 'Operador', $key);
    }

    return $result;
}
