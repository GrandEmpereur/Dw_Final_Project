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
<!-- ########################### Main ########################### -->

<header id="home" class="header_galery">

<!-- ########################### Vav ########################### -->

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

<!-- ########################### Fillter ########################### -->
    
    <nav>
      <div class="items">
        <span class="item active" data-name="all">All</span>
        <span class="item" data-name="Arc 1">Arc 1</span>
        <span class="item" data-name="Arc 2">Arc 2</span>
        <span class="item" data-name="Arc 11">Arc 11</span>
        <span class="item" data-name="Arc 16">Arc 16</span>
        <span class="item" data-name="Arc 18">Arc 18</span>
      </div>
    </nav>
    
<!-- ########################### Img ########################### -->
    <div class="gallery">
      <div class="image" data-name="all"><span><img src="img/Arc/All.png" alt="All Saga"></span></div> 
      <div class="image" data-name="Arc 1"><span><img src="img/Arc/Saga surpy village.jpg" alt="Arc 1"></span></div> 
      <div class="image" data-name="Arc 1"><span><img src="img/Arc/Arc1.png" alt="Arc 1"></span></div> 
      <div class="image" data-name="Arc 1"><span><img src="img/Arc/Arc1.1.png" alt="Arc 1"></span></div> 
      <div class="image" data-name="Arc 1"><span><img src="img/Arc/Arc1.2.jpg" alt="Arc 1"></span></div> 
      <div class="image" data-name="Arc 1"><span><img src="img/Arc/Arc1.3.png" alt="Arc 1"></span></div> 
      <div class="image" data-name="Arc 1"><span><img src="img/Arc/Arc1.4.jpg" alt="Arc 1"></span></div>
      <div class="image" data-name="Arc 1"><span><img src="img/Arc/Arc1.5.png" alt="Arc 1"></span></div>

      <!--  -->
      <div class="image" data-name="Arc 2"><span><img src="img/Arc/Saga Baratie.png" alt="Arc 2"></span></div>
      <div class="image" data-name="Arc 2"><span><img src="./img/Arc/Arc_2_.png" alt="Arc 2"></span></div> 
      <div class="image" data-name="Arc 2"><span><img src="./img/Arc/Arc_2_1.png" alt="Arc 2"></span></div> 
      <div class="image" data-name="Arc 2"><span><img src="./img/Arc/Arc_2_2.png" alt="Arc 2"></span></div> 
      <div class="image" data-name="Arc 2"><span><img src="./img/Arc/Arc_2_3.png" alt="Arc 2"></span></div> 
      <div class="image" data-name="Arc 2"><span><img src="./img/Arc/Arc_2_4.png" alt="Arc 2"></span></div>

      <!--  -->
      <div class="image" data-name="Arc 11"><span><img src="img/Arc/Saga Guerre au Sommet.jpg" alt="Arc 11"></span></div>
      <div class="image" data-name="Arc 11"><span><img src="./img/Arc/Arc_11_.png" alt="Arc11"></span></div> 
      <div class="image" data-name="Arc 11"><span><img src="./img/Arc/Arc_11_1.png" alt="Arc 11"></span></div> 
      <div class="image" data-name="Arc 11"><span><img src="./img/Arc/Arc_11_2.png" alt="Arc 11"></span></div> 
      <div class="image" data-name="Arc 11"><span><img src="./img/Arc/Arc_11_3.png" alt="Arc 11"></span></div> 
      <div class="image" data-name="Arc 11"><span><img src="./img/Arc/Arc_11_4.png" alt="Arc 11"></span></div>
      <!--  -->
      <div class="image" data-name="Arc 16"><span><img src="img/Arc/Saga bigMom.jpg" alt="Arc 16"></span></div>
      <div class="image" data-name="Arc 16"><span><img src="./img/Arc/Arc_16_.png" alt="Arc 16"></span></div> 
      <div class="image" data-name="Arc 16"><span><img src="./img/Arc/Arc_16_1.png" alt="Arc 16"></span></div> 
      <div class="image" data-name="Arc 16"><span><img src="./img/Arc/Arc_16_2.png" alt="Arc 16"></span></div> 
      <div class="image" data-name="Arc 16"><span><img src="./img/Arc/Arc_16_3.png" alt="Arc 16"></span></div> 
      <div class="image" data-name="Arc 16"><span><img src="./img/Arc/Arc_16_4.png" alt="Arc 16"></span></div>

      
      <div class="image" data-name="all"><span><img src="./img/Arc/Saga Wano.jpg" alt="Arc 18"></span></div>
      <div class="image" data-name="Arc 18"><span><img src="./img/Arc/Arc_18_.png" alt="Arc 18"></span></div> 
      <div class="image" data-name="Arc 18"><span><img src="./img/Arc/Arc_18_1.png" alt="Arc 18"></span></div> 
      <div class="image" data-name="Arc 18"><span><img src="./img/Arc/Arc_18_2.png" alt="Arc 18"></span></div> 
      <div class="image" data-name="Arc 18"><span><img src="./img/Arc/Arc_18_3.png" alt="Arc 18"></span></div> 
      <div class="image" data-name="Arc 18"><span><img src="./img/Arc/Arc_18_4.png" alt="Arc 18"></span></div>

  </div>

<!-- ########################### lightbox ########################### -->
  
  <div class="preview-box">
    <div class="details">
      <span class="title">Image Category: <p></p></span>
      <span class="icon fas fa-times"></span>
    </div>
    <div class="image-box"><img src="" alt=""></div>
  </div>
  <div class="shadow"></div>

<!-- ########################### Commentaire ########################### -->

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
      
<!-- ########################### footer ########################### -->

      <?php 
        include('./php/footer.php');
      ?>
<!-- ########################### Script ########################### -->

      <script src="./js/script.js"></script>

</body>
</html>







