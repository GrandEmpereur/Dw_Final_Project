<!DOCTYPE html>
<html lang="en">
    <?php session_start(); ?>
    <?php include('./php/link.php'); ?>
    <body>
    <div class="sidebar">
        <div class="logo-details">
        </div>
        <?php include('./php/adminNav.php'); ?>

        <?php include('./php/Analytique.php'); ?>

        <div class="sales-boxes">
            <div class="recent-sales box">
            <div class="title">User Add Form</div>
                <div class="sales-details-User">
                    <form method="POST" enctype="multipart/form-data">
                        <input  type="text" name="titre" class="user-form" placeholder="Title : " required>
                        <input type="file" name="img" class="user-form" accept=".jpg, .jpeg, .png" multiple >
                        <textarea id="summernote" name="description"></textarea>
                        <input type="submit" name="submit" class="send-btn-add" value="Send">
                    </form>

                    <div class="title">All Article</div>
                        <div class="sales-details-tableau">
                            <?php include('./php/db_Article.php'); ?>
                        </div> 
                </div>
            </div>
        </div>
    </section>
    <script src="./js/admin.js"></script>
</body>
</html>
