<!DOCTYPE html>
<html lang="en">
    <? session_start() ?>
    <?php 
        include('./php/link.php');
    ?>
<body>
    <?php 
        include('./php/header.php');
    ?>

<!-- ########################### Main ########################### -->   

    <?php 
        include('./php/link.php');
    ?>
<!-- ########################### Content ########################### -->

    <h2 class="section-heading">Blog</h2>
    
    <?php include('./php/db_ArticleView.php'); ?>
    
<!-- ########################### Next Page ########################### -->

    <div class="pagination">
    <a href="#">Prev</a>
    <a href="#">2</a>
    <a href="#">3</a>
    <a href="#">4</a>
    <a href="#">Next</a>
    </div>

<!-- ########################### footer ########################### -->

    <?php   
        include('./php/footer.php');
    ?>

<!-- ########################### Script ########################### -->

    <script src="./js/script.js"></script>


    </body>
</html>