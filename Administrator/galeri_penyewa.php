<?php require_once("../auth.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Proyek Perangkat Lunak</title>
    <link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css'>
    <link rel='stylesheet'
        href='https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&amp;display=swap'>
    <link rel="stylesheet" type="text/css" href="../assets/css/style_galeri.css">

    <!-- ICONS -->
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/Logo_baru.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../assets/img/Logo_baru.png">

</head>

<body>
    <div class="loader"></div>

    <!-- navbar -->
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="../assets/img/Profil.jpg" alt="">
                </span>

                <div class="text logo-text">
                    <span class="name">
                        <?php echo  $_SESSION["user"]["username"] ?>
                    </span>
                    <span class="profession">
                        <?php echo $_SESSION["user"]["status"] ?>
                    </span>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">

                <li class="search-box">
                    <i class='bx bx-search icon'></i>
                    <input type="text" placeholder="Search...">
                </li>

                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="informasi_penyewa.php">
                            <i class='bx bx-home-alt icon'></i>
                            <span class="text nav-text">Informasi</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="galeri_penyewa.php" class="active">
                            <i class='bx bx-wallet icon'></i>
                            <span class="text nav-text">Galeri</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="booking_penyewa.php">
                            <i class='bx bx-bar-chart-alt-2 icon'></i>
                            <span class="text nav-text">Booking</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="daftar_booking_penyewa.php">
                            <i class='bx bx-pie-chart-alt icon'></i>
                            <span class="text nav-text">Daftar Booking</span>
                        </a>
                    </li>

                </ul>
            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="logout.php">
                        <i class='bx bx-log-out icon'></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>

                <li class="mode">
                    <div class="sun-moon">
                        <i class='bx bx-moon icon moon'></i>
                        <i class='bx bx-sun icon sun'></i>
                    </div>
                    <span class="mode-text text">Dark mode</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>

            </div>
        </div>

    </nav>

    <section class="home">
        <div class="text">Galeri</div>
        <div class="container">
            <div class="gallery-wrap">
                <div class="item item-1"></div>
                <div class="item item-2"></div>
                <div class="item item-3"></div>
                <div class="item item-4"></div>
                <div class="item item-5"></div>
            </div>
        </div>

    </section>
    <!-- partial -->
    <script src="../assets/js/main.js"></script>

</body>

</html>