<?php

// se conecter a une bdd
$bdd = new PDO('mysql:host=localhost;dbname=entreprise;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));

/*
host : serveur 
dbname : nom de la bdd
root : identifiant
'' : mdp 
*/

// verification 
// var_dump($bdd);

// exec ==> requert SQL : INSERT UPDATE DELETE 

// insertion de donnée
// $bdd->exec('INSERT INTO employes (prenom) VALUE ("Alexandre")');

// Update d'un element 
// $bdd->exec('UPDATE employes SET prenom = "Alex" WHERE id_employes = 991');

// DELETE
// $bdd->exec('DELETE FROM employes WHERE id_employes = 991 ');

// Query : requert SQL : SELECT 
$reponse = $bdd->query('SELECT * FROM employes WHERE prenom = "Stephanie"');
// je met c'est info sous forme d'array dans une variable : 
$employe = $reponse->fetch(PDO::FETCH_ASSOC);
// je verifie
// print_r($employe);
// var_dump($employe);

// afficher le prenom et le nom 

echo $employe['prenom'] . ' ' . $employe['nom'] . '<br>';

// faire la meme chose avec tout les employes : 
$request = $bdd->query('SELECT * FROM employes');

// je met les info stockées dans $r sous forme d'array dans une variable $employe pour chaque employes grace a une boucle : 

while ($employe = $request->fetch()){
    // var_dump($employe);
    // echo "<br>";
    // afficher les nom et prenom de chaque employe
    echo $employe['nom'] . $employe['prenom'] . '<br>';
}
    

?>