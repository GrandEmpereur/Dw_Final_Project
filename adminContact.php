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
            <div class="title">All Contact Request</div>
                <div class="sales-details-User">
                    <?php include('./php/db_Contact.php'); ?>
                </div>
            </div>
        </div>
    </section>

    
    <script src="./js/admin.js"></script>
</body>
</html>
