<?php
$input = '$';
echo 'variable =>' .$input;

$dicctionarySymbols = ['?','$'];
sybomls($input);
function sybomls($inputBase)
{
    if ( in_array($inputBase,$dicctionarySymbols ) )
    {
        echo ' - - simbolo';
    }

}
