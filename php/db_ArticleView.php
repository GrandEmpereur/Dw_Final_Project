<?php
    include('./php/connexion.php');
    
    $request = $bdd->prepare("SELECT * FROM blog INNER JOIN usertable ON blog.id_auteur = usertable.id ORDER BY date DESC");
    $request->execute();
    $Blog_list = $request->fetchAll(PDO::FETCH_ASSOC);
    ?>
    
    
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
                    <a href="#">
                        <h3><?= $Blogs["titre"]?></h3>
                    </a>
                    <div class="card-meta">
                        Posted by <?= $Blogs["name"]?> on <?= $Blogs["date"]?>
                    </div>
                    <p><?= $Blogs["description"]?></p>
                        <a href="#" class="btn-readmore">Read more</a>
                </div>
            </div>
        
        <?php 
        } 
        ?>
    </section>


