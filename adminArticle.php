<!DOCTYPE html>
<html lang="en">
    <?php session_start(); ?>
    <?php include('./php/link.php'); ?>
    <body>

<!-- ########################### Main ########################### -->

    <div class="sidebar">
        <div class="logo-details">
        </div>

<!-- ########################### Include ########################### -->

        <?php include('./php/adminNav.php'); ?>

        <?php include('./php/Analytique.php'); ?>

<!-- ########################### Add Article ########################### -->

        <div class="Admin-boxes">
            <div class="recent-Admin box">
            <div class="title">Add Article</div>
                <div class="Admin-details-User">
                    <form method="POST" enctype="multipart/form-data">
                        <input  type="text" name="titre" class="user-form" placeholder="Title : " required>
                        <input type="file" name="img" class="image-inpute" accept=".jpg, .jpeg, .png" >
                        <textarea id="summernote" name="description"></textarea>
                        <input type="submit" name="submit" class="send-btn-add" value="Send">
                    </form>

<!-- ########################### Include ########################### -->

                    <div class="title">All Article</div>
                        <div class="Admin-details-tableau">
                            <?php include('./php/db_Article.php'); ?>
                        </div> 
                </div>
            </div>
        </div>
    </section>

<!-- ########################### Script ########################### -->

    <script src="./js/admin.js"></script>
</body>
</html>
