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
    <link rel="stylesheet" type="text/css" href="../assets/css/style_daftar_booking.css">

    <!-- ICONS -->
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/Logo_baru.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../assets/img/Logo_baru.png">

</head>

<body>
    <!-- navbar -->
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="../assets/img/Profil.jpg" alt="">
                </span>

                <div class="text logo-text">
                    <span class="name"><?php echo  $_SESSION["user"]["username"] ?></span>
                    <span class="profession"><?php echo $_SESSION["user"]["status"] ?></span>
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
                        <a href="informasi_admin.php">
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
                        <a href="daftar_booking_admin.php" class="active">
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
        <div class="text">Daftar Booking</div>
        <div class="container">
            <a href="tambah.php" class="btnblue"><i class="fa fa-plus"></i> Tambah </a>
			<a href="https://drive.google.com/file/d/1Kaw-L-5jt-_3xZLDhzogFaJObOMcYwj6/view?usp=drive_link" target="_blank" class="btnblue"><i class="fa fa-print"></i> Cetak </a>
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>NIK/NIM</th>
                        <th>Alamat</th>
                        <th>No Telp</th>
                        <th>File Surat</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>01</td>
                        <td>Hiro</td>
                        <td>D0220520</td>
                        <td>Mamuju</td>
                        <td>0812345678</td>
                        <td>
                            <a href="https://drive.google.com/file/d/1Kaw-L-5jt-_3xZLDhzogFaJObOMcYwj6/view?usp=drive_link" target="_blank" class="btnblue"> Surat </a>
                        </td>
                        <td>
                            <div class="buttons">
                                <Button class="btn" id="success">Terima</Button>
                                <Button class="btn" id="error">Tolak</Button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>02</td>
                        <td>Natsumi</td>
                        <td>D0220520</td>
                        <td>Mamuju</td>
                        <td>0812345678</td>
                        <td>
                            <a href="https://drive.google.com/file/d/1Kaw-L-5jt-_3xZLDhzogFaJObOMcYwj6/view?usp=drive_link" target="_blank" class="btnblue"> Surat </a>
                        </td>
                        <td>
                            <div class="buttons">
                                <Button class="btn" id="success">Terima</Button>
                                <Button class="btn" id="error">Tolak</Button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>03</td>
                        <td>Yoichi</td>
                        <td>D0220520</td>
                        <td>Mamuju</td>
                        <td>0812345678</td>
                        <td>
                            <a href="https://drive.google.com/file/d/1Kaw-L-5jt-_3xZLDhzogFaJObOMcYwj6/view?usp=drive_link" target="_blank" class="btnblue"> Surat </a>
                        </td>
                        <td>
                            <div class="buttons">
                                <Button class="btn" id="success">Terima</Button>
                                <Button class="btn" id="error">Tolak</Button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>04</td>
                        <td>Hunter</td>
                        <td>D0220520</td>
                        <td>Mamuju</td>
                        <td>0812345678</td>
                        <td>
                            <a href="https://drive.google.com/file/d/1Kaw-L-5jt-_3xZLDhzogFaJObOMcYwj6/view?usp=drive_link" target="_blank" class="btnblue"> Surat </a>
                        </td>
                        <td>
                            <div class="buttons">
                                <Button class="btn" id="success">Terima</Button>
                                <Button class="btn" id="error">Tolak</Button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>05</td>
                        <td>Taiga</td>
                        <td>D0220520</td>
                        <td>Mamuju</td>
                        <td>0812345678</td>
                        <td>
                            <a href="https://drive.google.com/file/d/1Kaw-L-5jt-_3xZLDhzogFaJObOMcYwj6/view?usp=drive_link" target="_blank" class="btnblue"> Surat </a>
                        </td>
                        <td>
                            <div class="buttons">
                                <Button class="btn" id="success">Terima</Button>
                                <Button class="btn" id="error">Tolak</Button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <ul class="notifications"></ul>
        </div>
    </section>
    <!-- partial -->
    <script src="../assets/js/main.js"></script>
    <script src="../assets/js/notification_booking.js"></script>

</body>

</html>