<!-- Formulaire  -->

<form action="" method="post">
    <input type="text" name="pseudo" placeholder="Pseudo">
    <br><br>
    <textarea name="message" placeholder=message cols="30" rows="10"></textarea>
    <br><br>
    <input type="submit" value="Send Nude ? ">
</form>

<?php

// connexion à la bdd 
$bdd = new PDO('mysql:host=localhost;dbname=bdd_commentaire;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));

// verification 
//print_r($bdd);

// si le form vaide le form 
if ($_POST){

    // je gére les ' pour pas tout casser 
    $_POST['pseudo'] = addslashes($_POST['pseudo']);
    $_POST['message'] = addslashes($_POST['message']);
    
    
    //enovie des info 
    $bdd->exec("INSERT INTO commentaires (Pseudo, Message, Date) VALUE ('$_POST[pseudo]', '$_POST[message]', NOW())");
}

$request = $bdd->query('SELECT * FROM commentaires');
while ($message = $request->fetch()){
    echo $message['Id'] . " " . $message['Pseudo'] . " ". $message['Message'] . " " . $message['Date'] . '<br>';
}

?>