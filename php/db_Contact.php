<?php

// ############################## DB Link ############################

        include('./php/connexion.php');
        
// ############################## Main ############################

        if ($_POST){

// ############################## DeletBtn ############################

            if(isset($_POST['deletContacte'])) {

                $id = $_POST['id'];
                $ContacteDelet = $bdd->prepare("DELETE FROM contacte WHERE id = '$id' ");
                $ContacteDelet->execute();
            }           
        }

// ############################## Select From ############################

        $request = $bdd->prepare("SELECT * FROM contacte");
        $request->execute();
        $Contacte_list = $request->fetchAll(PDO::FETCH_ASSOC);
        ?>
        
<!-- ############################## Html Table Contact ############################ -->

        <table class="tableau">
            <thead>
                <tr class="tableau_title" >
                    <th>Name</th>
                    <th>Email</th> 
                    <th>Message</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
        <?php 
            foreach($Contacte_list as $Contactes) {
        ?>
            <tr class="tableau_Contacte">
                <form action="" method="post">
                    
                    <td>
                        <input type="hidden" name="id" value="<?= $Contactes["id_client"]?> ">
                        <input type="text" name="name" value="<?= $Contactes["name"]?> ">
                    </td>
                    <td><input type="text" name="email" value="<?= $Contactes["email"]?> "></td>
                    <td><input type="text" name="message" value="<?= $Contactes["message"]?> "></td>
                    <td><input type="text" name="message" value="<?= $Contactes["date"]?> "></td>

                    <td><input type="submit" name='deletContacte' class="send-btn" value='Delete'></td>
                </form>
            </tr>
        <?php 
        } 
        ?>
            </tbody>
        </table>

