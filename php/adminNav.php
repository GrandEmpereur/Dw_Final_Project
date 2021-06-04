
        <ul class="nav-links">
            <li>
            <a href="./admin.php" class="active">
                <i class='bx bx-grid-alt' ></i>
                <span class="links_name">Dashboard</span>
            </a>
            </li>
            <li>
            <a href="./adminArticle.php">
                <i class='bx bx-box' ></i>
                <span class="links_name">Article</span>
            </a>
            </li>

            <?php
            if($_SESSION['status'] === 'admin'){?>
                <li>
            <a href="./adminUserAdd.php">
                <i class='bx bx-list-ul' ></i>
                <span class="links_name">User</span>
            </a>
            </li>
            <?php
            }
            ?>
            <li>
            <a href="./adminContact.php">
                <i class='bx bx-envelope-open'></i>
                <span class="links_name">Contact</span>
            </a>
            </li>
            <li class="log_out">
            <a href="./php/db_logout.php">
                <i class='bx bx-log-out'></i>
                <span class="links_name">Log out</span>
            </a>
            </li>
            <li>
            <a href="./index.php">
                <i class='bx bx-log-out' ></i>
                <span class="links_name">Back To WebSite</span>
            </a>
            </li>
        </ul>
    </div>

    </div>

    <section class="home-section">
        <nav>
        <div class="sidebar-button">
            <i class='bx bx-menu sidebarBtn'></i>
            <span class="dashboard">Dashboard</span>
        </div>
        <div class="profile-details">
            <img src="./img/luffy_enfant.jpg" alt="">
            <?php if (isset($_SESSION['status']) && $_SESSION['status'] == 'admin'){?>
                <span class="admin_name">Admin</span>
            <?php
            }elseif(isset($_SESSION['status']) && $_SESSION['status'] == 'editor'){ ?>
                <span class="admin_name">Modo</span>
            <?php
            }
            ?>
        </div>
        </nav>