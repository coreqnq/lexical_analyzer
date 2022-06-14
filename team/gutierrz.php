<?php

$input = '$result = a + b * c >= d';

//$result = searchOperators($input);

function searchOperators($input): array
{
    $comparisonOperators = array('>', '>=', '<', '<=', '==', '<>', '!=');
    $assignmentOperators = array('=');
    $arithmeticOperators = array('+', '-', '*', '/', '%', '^', '**');
    $space = array(' ');
    $operators = array_merge($comparisonOperators, $assignmentOperators, $arithmeticOperators, $space);
    // $explodedInput = str_split($input);

    $tree = array();

    foreach ($operators as $operator) {
        $position = strpos($input, $operator);
        if ($position !== false) {
            $tree[$position] = $operator;
        }
    }

    return $tree;
}
