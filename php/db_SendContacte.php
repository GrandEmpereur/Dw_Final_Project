<?php

// ############################## DB Link ############################

        include('./php/connexion.php');

// ############################## Send Data to Db ############################

        if ($_POST){

// ############################## All Data ############################
            $date = new DateTime('now');
            $dataContacte = [

// ############################## security ############################

                'name' => addslashes(htmlspecialchars($_POST['name'])) ,
                'email' => addslashes(htmlspecialchars($_POST['email'])) ,
                'message' => addslashes(htmlspecialchars($_POST['message'])),
                "date" => $date->format('Y-m-d H:i')
            ];
                
// ############################## Insert into Bdd ############################

                $SendContacte = $bdd->prepare("INSERT INTO contacte (name, email, message, date) VALUE (:name, :email, :message, :date )");
                $SendContacte->execute($dataContacte);
        } 
        ?>
