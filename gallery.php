<!DOCTYPE html>
<html lang="en">
<?php 
      include('./php/link.php');
    ?>
    <?php 
      session_start();
    ?>

    <title>Project Website | Gallery</title>

  <body>
<!-- Header -->
<header id="home" class="header_galery">
    <!-- Navigation -->
    <nav class="nav">
        <div class="navigation container">
        <div class="logo">
            <h1>Monkey D. Luffy<span>.</span></h1>
        </div>

        <div class="menu">
            <div class="top-nav">
                <div class="logo">
                <h1>Monkey D. Luffy<span>.</span></h1>
            </div>
            <div class="close">
                <i class="fas fa-times"></i>
            </div>
            </div>
            <ul class="nav-list">
                <li class="nav-item">
                    <a href="index.php" class="nav-link scroll-link">Home</a> 
                </li>
                <li class="nav-item">
                    <a href="history.php" class="nav-link scroll-link">History</a>
                </li>
                <li class="nav-item">
                    <a href="gallery.php" class="nav-link scroll-link">Gallery</a>
                </li>
                <li class="nav-item">
                    <a href="contact.php" class="nav-link scroll-link">Contact</a>
                </li>
                <li class="nav-item">
                    <a href="blog.php" class="nav-link scroll-link">Blog</a>
                </li>
                <li class="nav-item">
                
                    <?php 

                    if(isset($_SESSION['status'])){ ?>

                        <a href="./php/db_logout.php" class="nav-link scroll-link">Logout</a>
                    <?php
                    }else{ ?>

                        <a href="./login.php" class="nav-link scroll-link">Login</a>

                    <?php   
                    }
                    ?>
                </li>
            </ul>
        </div>

      <div class="hamburger">
        <i class="fas fa-bars"></i>
      </div>
    </div>
  </nav>
  <div class="wrapper-gallery">
    <!-- filter Items -->
    <nav>
      <div class="items">
        <span class="item active" data-name="all">All</span>
        <span class="item" data-name="Arc 1">Arc 1</span>
        <span class="item" data-name="Arc 2">Arc 2</span>
        <span class="item" data-name="Arc 3">Arc 3</span>
        <span class="item" data-name="Arc 4">Arc 4</span>
        <span class="item" data-name="Arc 5">Arc 5</span>
        <span class="item" data-name="Arc 6">Arc 6</span>
        <span class="item" data-name="Arc 7">Arc 7</span>
        <span class="item" data-name="Arc 8">Arc 8</span>
        <span class="item" data-name="Arc 9">Arc 9</span>
        <span class="item" data-name="Arc 10">Arc 10</span>
        <span class="item" data-name="Arc 11">Arc 11</span>
        <span class="item" data-name="Arc 12">Arc 12</span>
        <span class="item" data-name="Arc 13">Arc 13</span>
        <span class="item" data-name="Arc 14">Arc 14</span>
        <span class="item" data-name="Arc 15">Arc 15</span>
        <span class="item" data-name="Arc 16">Arc 16</span>
        <span class="item" data-name="Arc 17">Arc 17</span>
        <span class="item" data-name="Arc 18">Arc 18</span>
      </div>
    </nav>
    
    <!-- filter Images -->
    <div class="gallery">
      <div class="image" data-name="all"><span><img src="img/Arc/All.png" alt=""></span></div> 
      <div class="image" data-name="Arc 1"><span><img src="img/Arc/Saga surpy village.jpg" alt=""></span></div> 
      <div class="image" data-name="Arc 1"><span><img src="img/Arc/Arc1.png" alt=""></span></div> 
      <div class="image" data-name="Arc 1"><span><img src="img/Arc/Arc1.1.png" alt=""></span></div> 
      <div class="image" data-name="Arc 1"><span><img src="img/Arc/Arc1.2.jpg" alt=""></span></div> 
      <div class="image" data-name="Arc 1"><span><img src="img/Arc/Arc1.3.png" alt=""></span></div> 
      <div class="image" data-name="Arc 1"><span><img src="img/Arc/Arc1.4.jpg" alt=""></span></div>
      <div class="image" data-name="Arc 1"><span><img src="img/Arc/Arc1.5.png" alt=""></span></div>

      <!--  -->
      <div class="image" data-name="Arc 2"><span><img src="img/Arc/Saga Baratie.png" alt=""></span></div>
      <!-- <div class="image" data-name="Arc 2"><span><img src="" alt=""></span></div> 
      <div class="image" data-name="Arc 2"><span><img src="" alt=""></span></div> 
      <div class="image" data-name="Arc 2"><span><img src="" alt=""></span></div> 
      <div class="image" data-name="Arc 2"><span><img src="" alt=""></span></div> 
      <div class="image" data-name="Arc 2"><span><img src="" alt=""></span></div> -->

      <!--  -->
      <div class="image" data-name="Arc 3"><span><img src="img/Arc/Saga Dressrosa.jpg" alt=""></span></div>
      <!-- <div class="image" data-name="Arc 3"><span><img src="" alt=""></span></div> 
      <div class="image" data-name="Arc 3"><span><img src="" alt=""></span></div> 
      <div class="image" data-name="Arc 3"><span><img src="" alt=""></span></div> 
      <div class="image" data-name="Arc 3"><span><img src="" alt=""></span></div> 
      <div class="image" data-name="Arc 3"><span><img src="" alt=""></span></div> -->
      <!--  -->
      <div class="image" data-name="Arc 4"><span><img src="img/Arc/Saga East Blue one piece.jpg" alt=""></span></div>
      <!-- <div class="image" data-name="Arc 4"><span><img src="" alt=""></span></div> 
      <div class="image" data-name="Arc 4"><span><img src="" alt=""></span></div> 
      <div class="image" data-name="Arc 4"><span><img src="" alt=""></span></div> 
      <div class="image" data-name="Arc 4"><span><img src="" alt=""></span></div> 
      <div class="image" data-name="Arc 4"><span><img src="" alt=""></span></div> -->
      <div class="image" data-name="Arc 5"><span><img src="img/Arc/Saga Guerre au Sommet.jpg" alt=""></span></div>
      <!-- <div class="image" data-name="Arc 5"><span><img src="" alt=""></span></div> 
      <div class="image" data-name="Arc 5"><span><img src="" alt=""></span></div> 
      <div class="image" data-name="Arc 5"><span><img src="" alt=""></span></div> 
      <div class="image" data-name="Arc 5"><span><img src="" alt=""></span></div> 
      <div class="image" data-name="Arc 5"><span><img src="" alt=""></span></div> -->
      <!--  -->
      <div class="image" data-name="Arc 6"><span><img src="img/Arc/Saga Thriller Bark.png" alt=""></span></div>
      <!-- <div class="image" data-name="Arc 6"><span><img src="" alt=""></span></div> 
      <div class="image" data-name="Arc 6"><span><img src="" alt=""></span></div> 
      <div class="image" data-name="Arc 6"><span><img src="" alt=""></span></div> 
      <div class="image" data-name="Arc 6"><span><img src="" alt=""></span></div> 
      <div class="image" data-name="Arc 6"><span><img src="" alt=""></span></div> -->
      <!--  --> 
      <div class="image" data-name="Arc 7"><span><img src="img/Arc/Saga Wano.jpg" alt=""></span></div>
      <!-- <div class="image" data-name="Arc 7"><span><img src="" alt=""></span></div> 
      <div class="image" data-name="Arc 7"><span><img src="" alt=""></span></div> 
      <div class="image" data-name="Arc 7"><span><img src="" alt=""></span></div> 
      <div class="image" data-name="Arc 7"><span><img src="" alt=""></span></div> 
      <div class="image" data-name="Arc 7"><span><img src="" alt=""></span></div>
      <div class="image" data-name="Arc 7"><span><img src="" alt=""></span></div> -->
      <!--  -->
      <div class="image" data-name="Arc 8"><span><img src="img/Arc/Saga Water Seven.png" alt=""></span></div>
      <!-- <div class="image" data-name="Arc 8"><span><img src="" alt=""></span></div> 
      <div class="image" data-name="Arc 8"><span><img src="" alt=""></span></div> 
      <div class="image" data-name="Arc 8"><span><img src="" alt=""></span></div> 
      <div class="image" data-name="Arc 8"><span><img src="" alt=""></span></div>  -->
      <!--  -->
      <div class="image" data-name="Arc 9"><span><img src="img/Arc/Saga Île céleste.png" alt=""></span></div>
      <!-- <div class="image" data-name="Arc 9"><span><img src="" alt="" alt=""></span></div> 
      <div class="image" data-name="Arc 9"><span><img src="" alt=""></span></div> 
      <div class="image" data-name="Arc 9"><span><img src="" alt=""></span></div> 
      <div class="image" data-name="Arc 9"><span><img src="" alt=""></span></div> -->
      <!--  -->
      <div class="image" data-name="Arc 10"><span><img src="img/Arc/Saga Île des Hommes-Poissons.jpg" alt=""></span></div>
      <!-- <div class="image" data-name="Arc 10"><span><img src="" alt=""></span></div> 
      <div class="image" data-name="Arc 10"><span><img src="" alt=""></span></div> 
      <div class="image" data-name="Arc 10"><span><img src="" alt=""></span></div> 
      <div class="image" data-name="Arc 10"><span><img src="" alt=""></span></div>  -->
    </div>
  </div>
  <!-- fullscreen img preview box -->
  <div class="preview-box">
    <div class="details">
      <span class="title">Image Category: <p></p></span>
      <span class="icon fas fa-times"></span>
    </div>
    <div class="image-box"><img src="" alt=""></div>
  </div>
  <div class="shadow"></div>

  <script src="/js/gallery.js"></script>

  <section class="section contact" id="contact">
        <div class="commentaire-form">
            <h2>comment section</h2>
                <?php
                    if(isset($_SESSION['status'])){?>
                        <form action="" method="post">
                          <input type="text" name="name" class="text-box" placeholder="Read Your Name" required>
                          <textarea id="summernote" name="message" required></textarea>
                          <input type="submit" name="submit" class="send-btn" value="Send">
                        </form>
                    <?php
                    }
                    ?>
        </div>
    </section>
      <?php
        include('./php/commentaire.php')
      ?>
      <script src="./js/gallery.js"></script>
      <?php 
      include('./php/footer.php');
    ?>
</body>
</html>







