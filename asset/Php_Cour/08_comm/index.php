<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <!-- Favicon -->
    <link rel="shortcut icon" href="./img/Logo.png" type="image/x-icon" />
    <!-- Font Awesome -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>

    <title>Document</title>
</head>
<body>
    
    <section class="section contact" id="contact">
        <div class="commentaire-form">
            <h2>Let a comment</h2>
                <form class="contact" action="" method="post">
                    <input type="text" name="name" class="text-box" placeholder="Your Name" required>
                    <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
                    <input type="submit" name="submit" class="send-btn" value="Send">
                </form>
        </div>
    </section>
    <?php
        // connexion à la bdd 
        $bdd = new PDO('mysql:host=localhost;dbname=bdd_commentaire;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
        if ($_POST){
            // je gére les ' pour pas tout casser 
            $_POST['name'] = addslashes($_POST['name']);
            $_POST['message'] = addslashes($_POST['message']);
            //enovie des info 
            $bdd->exec("INSERT INTO commentaires (Pseudo, Message, Date) VALUE ('$_POST[name]', '$_POST[message]', NOW())");
        }
        // $request = $bdd->query('SELECT * FROM commentaires');
        // while ($message = $request->fetch()){
        //     echo "<div classe='message'>"
        //             . "<p>"
        //             . $message['Pseudo'] . ' ' . $message['Message'] . ' ' . $message['Date']
        //             . "<p>"
        //         . "</div>";
        // }
        // 
        ?>

        
</body>
</html>