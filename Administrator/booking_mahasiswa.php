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
    <link rel="stylesheet" type="text/css" href="../assets/css/style_booking.css">

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
                        <a href="informasi_mahasiswa.php">
                            <i class='bx bx-home-alt icon'></i>
                            <span class="text nav-text">Informasi</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="galeri_mahasiswa.php">
                            <i class='bx bx-wallet icon'></i>
                            <span class="text nav-text">Galeri</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="booking_mahasiswa.php">
                            <i class='bx bx-bar-chart-alt-2 icon'></i>
                            <span class="text nav-text">Booking</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="daftar_booking_mahasiswa.php" class="active">
                            <i class='bx bx-pie-chart-alt icon'></i>
                            <span class="text nav-text">Daftar Booking</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="pendaftaran_mahasiswa.php">
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
        <div class="text">Booking</div>
        <div class="container">
            <div align="center" class="text">Alat</div>
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Alat</th>
                        <th>Jumlah</th>
                        <th>Harga</th>
                        <th>Gambar</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>01</td>
                        <td>Drummer</td>
                        <td>2</td>
                        <td>RP. 10.000</td>
                        <td style="text-align: center;"><img src="../assets/img/alat4.jpg" style="width: 150px; height:150px;"></td>
                        <td>
                            <div class="buttons">
                                <Button class="btn" id="info">Sewa</Button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>02</td>
                        <td>Kriss</td>
                        <td>4</td>
                        <td>RP. 20.000</td>
                        <td style="text-align: center;"><img src="../assets/img/alat1.jpg" style="width: 150px; height:150px;"></td>
                        <td>
                            <div class="buttons">
                                <Button class="btn" id="info">Sewa</Button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>03</td>
                        <td>Kejong</td>
                        <td>1</td>
                        <td>RP. 10.000</td>
                        <td style="text-align: center;"><img src="../assets/img/alat5.jpg" style="width: 150px; height:150px;"></td>
                        <td>
                            <div class="buttons">
                                <Button class="btn" id="info">Sewa</Button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>04</td>
                        <td>Bazz</td>
                        <td>2</td>
                        <td>RP. 40.000</td>
                        <td style="text-align: center;"><img src="../assets/img/alat2.jpg" style="width: 150px; height:150px;"></td>
                        <td>
                            <div class="buttons">
                                <Button class="btn" id="info">Sewa</Button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>05</td>
                        <td>Seruling</td>
                        <td>2</td>
                        <td>RP. 20.000</td>
                        <td style="text-align: center;"><img src="../assets/img/alat3.jpg" style="width: 150px; height:150px;"></td>
                        <td>
                            <div class="buttons">
                                <Button class="btn" id="info">Sewa</Button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div align="center" class="text">Jasa</div>
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Jasa</th>
                        <th>Jumlah</th>
                        <th>Harga</th>
                        <th>Gambar</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>01</td>
                        <td>Ikat Kepala</td>
                        <td>5</td>
                        <td>RP. 50.000</td>
                        <td style="text-align: center;"><img src="../assets/img/jasa3.jpg" style="width: 150px; height:150px;"></td>
                        <td>
                            <div class="buttons">
                                <Button class="btn" id="info">Sewa</Button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>02</td>
                        <td>Anting</td>
                        <td>4</td>
                        <td>RP. 40.000</td>
                        <td style="text-align: center;"><img src="../assets/img/jasa1.jpg" style="width: 150px; height:150px;"></td>
                        <td>
                            <div class="buttons">
                                <Button class="btn" id="info">Sewa</Button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>03</td>
                        <td>Konde Kepala</td>
                        <td>4</td>
                        <td>RP. 40.000</td>
                        <td style="text-align: center;"><img src="../assets/img/jasa2.jpg" style="width: 150px; height:150px;"></td>
                        <td>
                            <div class="buttons">
                                <Button class="btn" id="info">Sewa</Button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>04</td>
                        <td>Celana</td>
                        <td>2</td>
                        <td>RP. 40.000</td>
                        <td style="text-align: center;"><img src="../assets/img/jasa4.jpg" style="width: 150px; height:150px;"></td>
                        <td>
                            <div class="buttons">
                                <Button class="btn" id="info">Sewa</Button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>05</td>
                        <td>Sarung</td>
                        <td>4</td>
                        <td>RP. 80.000</td>
                        <td style="text-align: center;"><img src="../assets/img/jasa6.jpg" style="width: 150px; height:150px;"></td>
                        <td>
                            <div class="buttons">
                                <Button class="btn" id="info">Sewa</Button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>06</td>
                        <td>Ikat Pinggang</td>
                        <td>1</td>
                        <td>RP. 10.000</td>
                        <td style="text-align: center;"><img src="../assets/img/jasa9.jpg" style="width: 150px; height:150px;"></td>
                        <td>
                            <div class="buttons">
                                <Button class="btn" id="info">Sewa</Button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>07</td>
                        <td>Baju</td>
                        <td>4</td>
                        <td>RP. 100.000</td>
                        <td style="text-align: center;"><img src="../assets/img/jasa7.jpg" style="width: 150px; height:150px;"></td>
                        <td>
                            <div class="buttons">
                                <Button class="btn" id="info">Sewa</Button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>08</td>
                        <td>Tappiang</td>
                        <td>4</td>
                        <td>RP. 40.000</td>
                        <td style="text-align: center;"><img src="../assets/img/jasa5.jpg" style="width: 150px; height:150px;"></td>
                        <td>
                            <div class="buttons">
                                <Button class="btn" id="info">Sewa</Button>
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