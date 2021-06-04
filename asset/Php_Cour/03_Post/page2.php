<!-- exo 
crée un formulaire d'inscription avec les champs : Nom, Prenom, Mail, mdp 
quand le form est valider, j'affiche : Voici vos information ...
et le form disparait ! -->


<?php

if($_POST){
?>

<h2>Voici vos info </h2>
    <ul>
        <li>Nom : <?php echo $_POST['nom'];  ?></li>
        <li>Prenom : <?php echo $_POST['prenom'];  ?></li>
        <li>Adresse mail : <?php echo $_POST['email'];  ?></li>
        <li>Mot de passe : <?php echo md5($_POST['mdp']);  ?></li>
    </ul>

<?php
}else {
?>

<form action="" method="post">
    <input type="text" name="nom" placeholder="Nom" required>
    <br><br>
    <input type="text" name="prenom" placeholder="Prenom" required>
    <br><br>
    <input type="email" name="email" placeholder="Email" required>
    <br><br>
    <input type="password" name="mdp" placeholder="Mot de passe" required>
    <br><br>
    <input type="submit" value="send">
    </form>
<?php
}
?>


<?php

// if($_POST){
//     echo "Voici vos information personelle : <br>";
//     echo "Voici votre nom : " . $_POST['nom'] . "<br>";
//     echo "Voici votre prenom : " . $_POST['prenom'] . "<br>";
//     echo "Voici votre email : " . $_POST['email'] . "<br>";
//     echo "Voici votre mdp : " . $_POST['mdp'] . "<br>";
//     echo "Voici votre mdp hacher : " . password_hash($_POST['mdp'], PASSWORD_BCRYPT,)  . "<br>";

// }else{
//     echo '<form action="" method="post">
//     <input type="text" name="nom" placeholder="Nom" required>
//     <br><br>
//     <input type="text" name="prenom" placeholder="Prenom" required>
//     <br><br>
//     <input type="email" name="email" placeholder="Email" required>
//     <br><br>
//     <input type="password" name="mdp" placeholder="Mot de passe" required>
//     <br><br>
//     <input type="submit" value="send">
//     </form>';
// }

?>