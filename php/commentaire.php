<?php
        include('./php/connexion.php');
        
        if ($_POST){
            if(isset($_POST['delete'])){
                $id = $_POST['delete'];
                $bdd->exec("DELETE FROM commentaires WHERE Id = '$id' ");
            }else{
                
                // je gére les ' pour pas tout casser 
                $date = new DateTime('now');
                $dataCommente = [
                    'name' => addslashes(htmlspecialchars($_POST['name'])) ,
                    'message' => addslashes($_POST['message']),
                    "date" => $date->format('Y-m-d H:i')
                ];
                include('./php/InsulteManager.php');
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