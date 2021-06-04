<?php

// ouverir une session 
session_start();

// stocker des info
$_SESSION['prenom'] = 'Patrick';
$_SESSION['nom'] = 'Boucher';

// suppre des info d'une session 
unset($_SESSION['nom']);

// deconection
session_destroy();

?>