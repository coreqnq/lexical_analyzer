<?php

function sybomls($inputBase)
{
    $data = [];
    $key = null;
    $dicctionarySymbols = ['?', '$'];

    $stringEval = explode(" ", $inputBase);

    foreach ($stringEval as $rowWord) {
        if (in_array($rowWord, $dicctionarySymbols, true)) {
            $key = array_search($rowWord, $stringEval);
        }
        if (!is_null($key)) {
            $data[] = array($rowWord, 'Simbolo / Tokens', $key);
        }
        $key = null;
    }

    return $data;
}
