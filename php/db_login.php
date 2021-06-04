
<?php 

// ############################## DB Link ############################

    include_once('connexion.php');

// ############################## Login ############################

    if($_POST){
        if (isset($_POST['name'], $_POST['pdw']))   {

// ############################## Data ############################



// ############################## Security ############################

            $name = htmlspecialchars($_POST['name']);
            $password = htmlspecialchars($_POST['pdw']);
    
            $_POST['name'] = addslashes($_POST['name']);
            $_POST['pdw'] = addslashes($_POST['pdw']);

// ############################## Select From DB ############################

            $check = $bdd->prepare('SELECT name, password, id, status FROM usertable WHERE name = ?');
            $check->execute(array($name));
            $data = $check->fetchAll();
            $row = $check->rowCount();
            if($row == 1 )   {

// ############################## Password Vérification ############################

                    if(password_verify($password, $data[0]['password'])) {
                        session_start();
                        $_SESSION['user'] = $data[0]['name'];
                        $_SESSION['status'] = $data[0]['status'];
                        $_SESSION['id'] = $data[0]['id'];

// ############################## Permission Manager ############################

                        if(isset($_SESSION['status']) && ($_SESSION['status'] == 'admin'|| $_SESSION['status'] == 'editor') ) {

// ############################## Herder Location ############################

                            header('Location:../admin.php');
                        }else header('Location:../login.php?login_err=Password');
                    }else header('Location:../login.php?login_err=Name');
            }else header('Location:../login.php?login_err=already');
            
        }else header('Location:../index.php');
    }






