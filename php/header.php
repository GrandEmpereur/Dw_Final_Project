<!-- ########################### Header ########################### -->

<header id="home" class="header">

<!-- ########################### Nav Bar ########################### -->

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
                    <a href="blog.php" class="nav-link scroll-link">Blog</a>
                </li>
                <li class="nav-item">
                    <a href="contact.php" class="nav-link scroll-link">Contact</a>
                </li>
                <li class="nav-item">
                    <?php 
                        session_start();

                    if(isset($_SESSION['status']) && ($_SESSION['status'] == 'admin'|| $_SESSION['status'] == 'editor')){ ?>

                        <a href="./php/db_logout.php" class="nav-link scroll-link">Logout</a>
                        <a href="./admin.php" class="nav-link scroll-link">PanelAdmin</a>
                    <?php
                    }elseif(isset($_SESSION['status'])){?>

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

<!-- ########################### Burger Icon ########################### -->

        <div class="hamburger">
            <i class="fas fa-bars"></i>
        </div>
        </div>
    </nav>

<!-- ########################### Hero ########################### -->

    <div class="hero">
        <h3>Hello, my name is</h3>
        <h1>Monkey D. Luffy</h1>
        <h4>And this is my history <span id="type1"></span></h4>
    </div>

    <img class="banner" src="./img/Luffy.jpg" alt="" />

<!-- ########################### Social Icon ########################### -->

    <div class="icons">
        <span><i class="fab fa-facebook-f"></i></span>
        <span><i class="fab fa-instagram"></i></span>
        <span><i class="fab fa-twitter"></i></span>
    </div>
</header>