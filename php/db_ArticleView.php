<?php
// ############################## DB Link ############################

    include('./php/connexion.php');

// ############################## Select From ############################
    
    $request = $bdd->prepare("SELECT * FROM blog INNER JOIN usertable ON blog.id_auteur = usertable.id ORDER BY date DESC");
    $request->execute();
    $Blog_list = $request->fetchAll(PDO::FETCH_ASSOC);
    ?>
    
<!-- ############################## Html Article ############################ -->

    <section class="blog">
        <?php 
            foreach($Blog_list as $Blogs) {
        ?>
        
            <div class="card">
                <div class="card-image">
                    <input type="hidden" name="id" value="<?= $Blogs["id_article"]?> ">
                    <a href="#">
                        <img src="<?= $Blogs["image"]?>" alt="Card Image">
                    </a>
                </div>

                <div class="card-description">
                    <h3><?= $Blogs["titre"]?></h3>
                    <div class="card-meta">
                        Posted by <?= $Blogs["name"]?> on <?= $Blogs["date"]?>
                    </div>
                    <p><?= $Blogs["description"]?></p>
                        <a href="./blogPost.php?id=<?= $Blogs['id_article'] ?>" class="btn-readmore">Read more</a>
                </div>
            </div>
        
        <?php 
        } 
        ?>
    </section>


