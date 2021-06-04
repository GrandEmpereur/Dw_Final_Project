<!DOCTYPE html>
<html lang="en">
    <?php session_start() ?>
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
                    <form method="POST">
                        <input type="text" name="name" class="user-form" placeholder="Name..." required>
                        <input type="email" name="email" class="user-form" placeholder="Email..." required>
                        <input type="password" name="pwd" minlength="8" class="user-form" placeholder="Password | (8 characters minimum):" required>
                        <input type="password" name="code" minlength="8" class="user-form" placeholder="Password | (8 characters minimum):" required>
                        <input type="submit" name="submit" class="send-btn-add" value="Send">
                    </form>

                    <div class="title">Modif User</div>
                        <div class="sales-details-tableau">
                            <?php include('./php/db_Admin.php'); ?>
                        </div> 
                </div>
            </div>
        </div>
    </section>

    
    <script src="./js/admin.js"></script>
</body>
</html>
