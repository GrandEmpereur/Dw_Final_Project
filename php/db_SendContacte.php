<?php
        include('./php/connexion.php');
        
        if ($_POST){
            $date = new DateTime('now');
            $dataContacte = [

                'name' => addslashes(htmlspecialchars($_POST['name'])) ,
                'email' => addslashes(htmlspecialchars($_POST['email'])) ,
                'message' => addslashes(htmlspecialchars($_POST['message'])),
                "date" => $date->format('Y-m-d H:i')
            ];
                

                $SendContacte = $bdd->prepare("INSERT INTO contacte (name, email, message, date) VALUE (:name, :email, :message, :date )");
                $SendContacte->execute($dataContacte);
        } 
        ?>
