<a href="?pays=fr">France</a> -
<a href="?pays=es">Espagne</a> - 
<a href="?pays=en">Angleterre</a> -
<a href="?pays=it">Italie</a> 

<hr>

<?php

// s'il y a le pays dans l'url : 
if (isset($_GET['pays'])){
    $pays = $_GET['pays'];
    
}elseif (isset($_COOKIE['pays'])){
    $pays = $_COOKIE['pays'];
}else{
    $pays = 'fr'; // default 
}

// cookie qui stoke le pays 
setcookie('pays', $pays, time()+365*24*3600);


// j'afficher les texte dans les dif langues : 
    switch($pays){
        case 'fr':
            echo 'Bonjour...';
            break;
        case 'es': 
            echo 'Holla ...';
            break;
        case 'en':
            echo 'Hello ...';
            break;
        case 'it':
            echo 'Ciao ...';
            break;
    }