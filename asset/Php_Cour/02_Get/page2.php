<h1>Page2</h1>

<a href="./page1.php">page1</a>

<hr>
<?php

    if($_GET){
        // recuperer des info dans un url
        echo $_GET['produit'] . "<br>";
        echo $_GET['couleur'] . "<br>";
        echo $_GET['prix'] . "<br>";

    }

?>

<hr>

<?php

if($_GET){
    // afficher " vous avez choisie le ... de couleur ... au prix ... €
    echo "Vous avez choisie " . $_GET['produit'] . " ";
    echo "de couleur " . $_GET['couleur'] . " ";
    echo "au prix de " . $_GET['prix'] . "€ <br>";
}else{
    // pas d'info url, on affiche : "Vous n'avez pas choisi de produit ! 
    echo "Vous n'avez pas choisie de produit ! ";
}

?>