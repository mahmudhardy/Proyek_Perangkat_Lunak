<?php require_once("../auth.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Proyek Perangkat Lunak</title>
    <link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css'>
    <link rel='stylesheet'
        href='https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&amp;display=swap'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/style_informasi.css">

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
                        <a href="informasi_admin.php" class="active">
                            <i class='bx bx-home-alt icon'></i>
                            <span class="text nav-text">Informasi</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="galeri_admin.php">
                            <i class='bx bx-wallet icon'></i>
                            <span class="text nav-text">Galeri</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="booking_admin.php">
                            <i class='bx bx-bar-chart-alt-2 icon'></i>
                            <span class="text nav-text">Booking</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="daftar_booking_admin.php">
                            <i class='bx bx-pie-chart-alt icon'></i>
                            <span class="text nav-text">Daftar Booking</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="pendaftaran_admin.php">
                            <i class='bx bx-user icon'></i>
                            <span class="text nav-text">Pendaftaran</span>
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
        <div class="text">Informasi</div>
        <div class="container">
            <a style="grid-column: span 3; grid-row: span 2; width: 160px; " href="tambah.php" class="btnblue"><i
                    class="fa fa-plus"></i> Tambah Informasi </a>
            <div class="card">
                <div class="box">
                    <div class="imgBx">
                        <img src="../assets/img/informasi1.jpg" alt="">
                    </div>
                    <div class="contentBx">
                        <div>
                            <h2>AUKM Pandaraq Raih Juara Di Pesta Daring UNJ 2021</h2>
                            <p>Unit Kegiatan Mahasiswa Seni Pandaraq Unsulbar menorehkan prestasi melalui lomba kreasi
                                tari tradisional sekala nasional,
                                yang diadakan oleh Universitas Negeri Jakarta. Dimana tim tari Pandaraq sebagai juara
                                harapan...</p>
                            <a style="grid-column: span 3; grid-row: span 2; width: 280px;" target="_blank" href="https://www.unsulbarnews.com/ukm-pandaraq-raih-juara-di-pesta-daring-unj-2021" class="btnblue"> Baca Lebih Lanjut!... </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="box">
                    <div class="imgBx">
                        <img src="../assets/img/informasi2.jpg" alt="">
                    </div>
                    <div class="contentBx">
                        <div>
                            <h2>81 Anggota Baru UKM Seni Pandaraq Unsulbar Dikukuhkan</h2>
                            <p>Unit Kegiatan Mahasiswa Seni Pandaraq Universitas Sulawesi Barat, gelar pengukuhan
                                anggota baru, di pelataran gedung kembar Unsulbar.
                                Sebanyak 81 anggota baru tergabung dalam angkatan Parromai VI tersebut...</p>
                            <a style="grid-column: span 3; grid-row: span 2; width: 280px;" target="_blank" href="https://www.unsulbarnews.com/81-anggota-baru-ukm-seni-pandaraq-unsulbar-dikukuhkan" class="btnblue"> Baca Lebih Lanjut!... </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="box">
                    <div class="imgBx">
                        <img src="../assets/img/informasi3.jpg" alt="">
                    </div>
                    <div class="contentBx">
                        <div>
                            <h2>Arah Pandaraq Unsulbar Di Tangan Nakhoda Barunya</h2>
                            <p>Para pengurus ini diketuai oleh Irfan, beserta wakilnya Nurmadina.
                                Kepada Unsulbar News, Irfan menuturkan usai dilantik secara resmi, dalam waktu dekat
                                akan melakukan rapat program...</p>
                            <a style="grid-column: span 3; grid-row: span 2; width: 280px;" target="_blank" href="https://www.unsulbarnews.com/arah-pandaraq-unsulbar-di-tangan-nakhoda-barunya" class="btnblue"> Baca Lebih Lanjut!... </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- partial -->
    <script src="../assets/js/main.js"></script>

</body>

</html>