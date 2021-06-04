<?php
// ############################## DB Link ############################

        include('./php/connexion.php');
        
// ############################## Main ############################
        if ($_POST){

// ############################## Delet BTN ############################

            if(isset($_POST['delete'])){
                $id = $_POST['delete'];
                $bdd->exec("DELETE FROM commentaires WHERE Id = '$id' ");

// ############################## Send BTN ############################

            }else{
                
// ############################## All Data ############################

                $date = new DateTime('now');
                $police = file('./asset/insulte.txt');
                $trie = array_map('trim', $police);
                $trie2 = array_map("strtolower", $trie);
                $dataCommente = [
                    'name' => addslashes(htmlspecialchars(str_replace($trie, '**', $_POST['name']))) ,
                    'message' => addslashes(str_replace($trie, '**', $_POST['message'])),
                    "date" => $date->format('Y-m-d H:i')
                    
                ];

// ############################## SQL Request ############################

                $SendComment = $bdd->prepare("INSERT INTO commentaires (Pseudo, Message, Date) VALUE ( :name, :message, :date)");
                $SendComment->execute($dataCommente);

            }
        } 
        ?>

        <?php
        $request = $bdd->prepare("SELECT * FROM commentaires ORDER BY date DESC");
        $request->execute();
        $comment_list = $request->fetchAll(PDO::FETCH_ASSOC);
        ?>

<!-- ############################## Commentaire Form ############################ -->

        <?php 
            foreach($comment_list as $comment) {
        ?>
            
            <div class="commentaire_style">
                <p><?=  $comment['Pseudo'] . "<br>" . $comment['Message'] . "<br>" . $comment['Date']; ?></p>
                <form action="" method="post">
                    <?php if (isset($_SESSION['status']) && $_SESSION['status'] == 'admin'){ ?>
                        <input type="submit" value="Delete">
                        <input type="hidden" value="<?= $comment['Id'];?>" name="delete">
                    <?php
                    }
                    ?>
                </form>
            </div>
        <?php 
        } 
        ?>