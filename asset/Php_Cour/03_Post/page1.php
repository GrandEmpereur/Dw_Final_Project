<form method="post">
    <input type="text" name="prenom" placeholder="Prenom">
    <br><br>
    <textarea name="description" placeholder="Message" cols="50" rows="10"></textarea>
    <br><br>
    <input type="submit" value="send">
</form>

<?php

// afficher les info recuperer 
if($_POST){
    echo $_POST['prenom'] . "<br>";
    echo $_POST['description'] . "<br>";
}


?>
