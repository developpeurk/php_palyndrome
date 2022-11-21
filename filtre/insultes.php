<?php

$insultes = ['merde','con'];

$asterisque = [];
foreach ($insultes as $insulte):
    $asterisque[] = substr($insulte,0,1) .  str_repeat('*', strlen($insulte) - 1);
endforeach;
$phrase = readline('Entrez une phrase:');
$phrase = str_replace($insultes, $asterisque, strtolower($phrase));

echo $phrase;

