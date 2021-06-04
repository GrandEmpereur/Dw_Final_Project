<?php 
// ############################## DB Link ############################

    include('./php/connexion.php');

// ############################## SQL REQuest  ############################
    $request = $bdd->prepare("SELECT * FROM usertable");
    $request->execute();
    $User_list = $request->fetchAll(PDO::FETCH_ASSOC);

    $request = $bdd->prepare("SELECT * FROM blog");
    $request->execute();
    $Blog_list = $request->fetchAll(PDO::FETCH_ASSOC);

    $request = $bdd->prepare("SELECT * FROM contacte");
    $request->execute();
    $Contact_list = $request->fetchAll(PDO::FETCH_ASSOC);


?>

<!-- // ############################## HTML Main ############################ -->

<div class="home-content">
        <div class="overview-boxes">
            <div class="box">
            <div class="right-side">
                <div class="box-topic">Total User</div>
                <div class="number"><?= count($User_list) ?></div>
                <div class="indicator">
                <i class='bx bx-up-arrow-alt'></i>
                <span class="text">Up from yesterday</span>
                </div>
            </div>
            <i class='bx bxs-user-account cart'></i>
            </div>
            <div class="box">
            <div class="right-side">
                <div class="box-topic">Total Article</div>
                <div class="number"><?= count($Blog_list) ?></div>
                <div class="indicator">
                <i class='bx bx-up-arrow-alt'></i>
                <span class="text">Up from yesterday</span>
                </div>
            </div>
            <i class='bx bx-bookmark-alt cart two' ></i>
            </div>
            <div class="box">
            <div class="right-side">
                <div class="box-topic">Total Contact</div>
                <div class="number"><?= count($Contact_list) ?></div>
                <div class="indicator">
                <i class='bx bx-up-arrow-alt'></i>
                <span class="text">Up from yesterday</span>
                </div>
            </div>
            <i class='bx bx-envelope-open cart three' ></i>
            </div>
        </div>