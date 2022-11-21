<?php


// kayak est palindrome
while(true) {
    $mot = readline("Entrez votre mot: ");
    if($mot === '') {
        exit('Fin du programme');
    }

    $reverse = strtolower(strrev($mot));
    if(strtolower($mot) === $reverse) {
        echo 'Ce mot est un palyndrome';
        exit();
    } else {
      echo 'Ce mot n\'est pas un palyndrome';
      exit();
    }

}