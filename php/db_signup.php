<?php

include_once('connexion.php');
// ############################## Register ############################

if ($_POST){
    if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['pdw']) && isset($_POST['cpdw'])){

        $Alldata = [

            "name" => htmlspecialchars($_POST['name']),
            "email" => htmlspecialchars($_POST['email']),
            "pdw" => htmlspecialchars($_POST['pdw']),
            "cpdw" => htmlspecialchars($_POST['cpdw']),
            'status' => 'visitor'
        ];
            // L'utilisateur est inscrit dans la BDD
            $verif = $bdd->prepare('SELECT name, email, password FROM usertable WHERE email = ?');
            $verif->execute(array($Alldata["email"]));
            $row = $verif->rowCount();
        
            if($row == 0){

                if(strlen($Alldata["name"])){

                    if(strlen($Alldata["email"])){

                        if(filter_var($Alldata["email"], FILTER_VALIDATE_EMAIL)){

                            if($Alldata["pdw"] === $Alldata["cpdw"]){

                                $Alldata["pdw"] = password_hash($_POST['pdw'], PASSWORD_DEFAULT);
                                $senddata = $bdd->prepare("INSERT INTO usertable (name, email, password, Cpassword, status ) VALUES ( :name, :email, :pdw, :cpdw, :status)");
                                $senddata->execute($Alldata);
                                header('Location: ../index.php');
                            }else{ header('Location: login.php?reg_err=password');}
                        }else{ header('Location: login.php?reg_err=mail');}
                    }else{ header('Location: login.php?reg_err=email_length');}
                }else{ header('Location: login.php?reg_err=pseudo_length');}
            }else{ header('Location: login.php?reg_err=already');}
        }
}

