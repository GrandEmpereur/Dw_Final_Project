<?php
    include('./php/connexion.php');
    if ($_POST){

        if(isset($_POST['modifPost'])) {
            
            $imgUpdateName = $_FILES['imgUpdate']['name'];
            $imgUpdateTmp = $_FILES['imgUpdate']['tmp_name'];
            $imgUpdateLink = 'img/upload/' . $imgUpdateName; 
            move_uploaded_file($imgUpdateTmp, $imgUpdateLink);

            $date = new DateTime('now');
            $dataBlog = [
                'titre' => $_POST['titre'],
                'description' => $_POST['description'],
                'id' => $_POST['id'],
                'image' => $imgUpdateLink,
                "date" => $date->format('Y-m-d H:i')
            ];

            $BlogUpdate = $bdd->prepare("UPDATE blog set titre = :titre, image = :image, description = :description, date = :date WHERE id_article = :id");
            $BlogUpdate->execute($dataBlog);

        }elseif(isset($_POST['deletPost'])) {

            $id = $_POST['id'];
            $BlogDelet = $bdd->prepare("DELETE FROM blog WHERE 	id_article = '$id' ");
            $BlogDelet->execute();
        }
    
        else{
            
            $imgName = $_FILES['img']['name'];
            $imgTmp = $_FILES['img']['tmp_name'];
            $imgLink = 'img/upload/' . $imgName; 
            move_uploaded_file($imgTmp, $imgLink);

            $date = new DateTime('now');
            $dataBlogs = [
                'id_auteur' => $_SESSION['id'],
                "titre" => $_POST['titre'],
                "description" => $_POST['description'],
                'image' => $imgLink,
                "date" => $date->format('Y-m-d H:i')
            ];
            
            $blogArticle = $bdd->prepare("INSERT INTO blog (id_auteur, titre, image, description, date ) VALUES (:id_auteur, :titre, :image, :description, :date ) ");
            $blogArticle->execute($dataBlogs);
        }
        
        // recup nom 
        // session id 
        // id auteur db 
        // : id => $_SESSION[id]
        // selecte * frome blog  Inner join  usertable on blog.id-auteur = usertable.id 
        
    }




    $request = $bdd->prepare("SELECT * FROM blog");
    $request->execute();
    $Blog_list = $request->fetchAll(PDO::FETCH_ASSOC);
    ?>
    
    <table class="tableau">
            <thead>
                <tr class="tableau_title" >
                    <th>Titre</th>
                    <th>Image</th> 
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
        <?php 
            foreach($Blog_list as $Blogs) {
        ?>
            <tr class="tableau-blog-edit">
                <form action="" method="post" enctype="multipart/form-data">
                    
                    <td>
                        <input type="hidden" name="id" value="<?= $Blogs["id_article"]?> ">
                        <input type="text" name="titre" value="<?= $Blogs["titre"]?> ">
                    </td>
                    <td>
                        <img src="<?= $Blogs['image'];?>" alt="img-db">
                        <input type="file" name="imgUpdate" class="user-form" accept=".jpg, .jpeg, .png" multiple >
                    </td>
                    <td>
                        <input type="text" name="description" value="<?= $Blogs["description"]?> ">
                    </td>
                    <td>
                        <input type="submit" name='modifPost' class="send-btn" value='Modif'>
                    </td>
                    <td>
                        <input type="submit" name='deletPost' class="send-btn" value='Delete'>
                    </td>
                </form>
            </tr>
        <?php 
        } 
        ?>
            </tbody>
        </table>


<!-- 
// $_FILES pour la gestion d'image en php
// $name = $_FILES['filename']['name'] => img
// tmp = $_FILES['filename]['tmp-name'] toujours second parametre tmp_name 
// fb-link = ' img/upload/' . $name;  chemein 
// $move_upload_file($tmp, $db-link);
// INSERT INTO blog (img) values ('db-link);  
-->