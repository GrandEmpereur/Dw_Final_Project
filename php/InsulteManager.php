<?php

    $police = file('./asset/insulte.txt');
    
    $trie = array_map('trim', $police);
    if(in_array($_POST['message'], $trie)){
        var_dump('sa marche ');
        //$message = str_replace($censurer, ' *** ', $message); // Les espaces autour des étoiles, essaies d'écrire sans tu verras pourquoi ils y sont
    }

    