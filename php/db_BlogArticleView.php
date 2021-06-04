<?php
// ############################## DB Link ############################

    include('./php/connexion.php');

// ############################## Select From ############################
    $id = $_GET['id'];
    $request = $bdd->prepare("SELECT * FROM blog INNER JOIN usertable ON blog.id_auteur = usertable.id WHERE id_article = $id ");
    $request->execute();
    $BlogPost_list = $request->fetchAll(PDO::FETCH_ASSOC);

    ?>

<!-- ############################## Html Article ############################ -->

<h2 class="page-heading">Blog Post Heading</h2>
    <section id="blogpost">
        <?php 
            foreach($BlogPost_list as $BlogPost) {
        ?>
            <div class="card">
                <div class="card-meta-blogpost">
                    Posted by  <?= $BlogPost["name"]?> on <?= $BlogPost["date"]?>
                </div>
            
                <div class="card-image">
                    <img src="<?= $BlogPost["image"]?>" alt="Card Image">
                </div>

                <div class="card-description">
                    <h3>The Introduction</h3>
                    <p><?= $BlogPost["description"]?></p>
                </div>
            </div>
        <?php 
        } 
        ?>
    </section>
