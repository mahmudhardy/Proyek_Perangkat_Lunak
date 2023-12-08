<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Proyek Perangkat Lunak</title>
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/style_awal.css" />

    <!-- ICONS -->
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/Logo_baru.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/Logo_baru.png">
</head>

<body>
    <header class="header">
        <a class="logo">PANDARAQ</a>
        <nav class="navbar">
            <a href="#home" class="active">Home</a>
            <a href="#about">About</a>
            <a href="#destination">Destination</a>
            <a href="#contact">Contact</a>
            <a class="btn" href="index_login.php">Login</a>
        </nav>
    </header>

    <!--HOME-->
    <section class="home" id="home">
        <div class="home-content">
            <h1>SELAMAT DATANG DI PANDARAQ</h1>
            <h3>Unit Kegiatan Mahasiswa Seni</h3>
            <h3>Dari <span>Universitas Sulawesi Barat</span></h3>
            <p>
                Pengembangan sistem informasi UKM Seni Pandaraq diharapkan dapat membawa sejumlah manfaat, antara lain:
                <br />
                Data UKM Pandaraq lebih mudah dilihat secara keseluruhan, dan mahasiswa berbakat seni, khususnya
                mahasiswa baru Universitas Sulawesi Barat, lebih mudah mengakses informasinya. Sistem informasi ada
                untuk membantu mengidentifikasi bakat dan potensi anggota dan membantu membimbing mereka ke bidang yang
                tepat. Di bidang seni, UKM Seni Pandaraq lebih mudah diperkenalkan kepada mahasiswa baru atau mahasiswa
                yang memiliki bakat di bidang seni.
            </p>
        </div>

        <div class="home-img">
            <img src="assets/img/Logo_baru.png" alt="LogoMy" />
        </div>
    </section>

    <!--ABOUT-->
    <section class="about" id="about">
        <div class="about-img">
            <img src="assets/img/Logo_lama.png" alt="LogoMy" />
        </div>
        <div class="about-content">
            <h2 class="heading">About <span> Pandaraq</span></h2>
            <h3>Unit Kegiatan Mahasiswa Seni</h3>
            <p>
                "Pandaraq" ketika diartikan kedalam bahasa indonesia artinya "Cahaya,bercahaya"
                Yang dimana nama ini digagas pertama kali oleh pak dalif untuk nama UKM ini
                diharap sebagai jalan terang dalam mengenalkan dan melestarikan kesenian
                dilingkungan mahasiswa dan masyarakat.
            </p>
            <a href="#" class="btn">Read More</a>
        </div>
    </section>

    <!--DESTINATION-->
    <section class="destination" id="destination">
        <div class="about-content">
            <h2 class="heading">Destination <span> Pandaraq</span></h2>
            <div class="destination-container">
                <div class="destination-icon">
                    <img src="assets/img/Foto1.jpg" alt="LogoMy" />
                </div>
                <div class="destination-description">
                    Untuk membuat landasan awal organisasi jauh sebelum konferensi pers. “Pandaraq” jika
                    diterjemahkan ke dalam bahasa Indonesia berarti “cahaya, bersinar”. Nama tersebut pertama kali
                    diusulkan oleh Pak Dalif untuk nama UKM. Semoga ini menjadi jalan terang dalam mengenalkan dan
                    melestarikan seni kepada pelajar dan masyarakat. Kelas pertama inilah yang sering disebut dengan
                    kelas “pionir”, dilanjutkan dengan acara “sesi kerja”. Karena ini juga merupakan kegiatan “belajar”,
                    ​​mengunjungi tempat-tempat bersejarah mandal. Selain itu rapat kerja ini bertujuan untuk menentukan
                    arah dan kegiatan organisasi ke depan.Pada rapat kerja tersebut kami merumuskan “Rencana Kerja”
                    berdasarkan rencana kerja dan penyusunan anggaran masing-masing departemen serta berdasarkan
                    kebutuhan organisasi kedepannya. .
                    Usai rapat kerja, kami langsung mengadakan kegiatan rekrutmen anggota baru golongan “satu”, atau
                    sebagai kader organisasi angkatan pertama. Penuh harapan agar “Parromaiq” yang dalam bahasa
                    Indonesia berarti “selamat datang, selamat datang, menerima” menjadi nama yang tepat dan bermakna
                    bagi kegiatan kader NUS, yang memiliki ciri khas tersendiri dan memiliki makna universal. Nama
                    kegiatan ini awalnya digagas oleh Pembina Harian Pak Dalif dan dipopulerkan oleh Sanggar Teater Andy
                    Arafat (Kak Apo), Sanggar Tari Sahabuddin Mahganna (Seni Onedo), Sanggar Musik Ishak Jenggot
                    (Komunitas Sureq Bolong), Kak Rahmat Workshop visual dan sastra Panggung (Uwake), dan workshop
                    fotografi dan sinematografi Kak Muhammad Ridwan Alimuddin (Nusa Pustaka).
                </div>
            </div>
        </div>
        </div>
    </section>

    <!--CONTACT-->
    <section class="about" id="contact">
        <div class="about-content">
            <h2 class="heading">Contact <span> Us</span></h2>
            <p>
                Untuk informasi lebih lanjut bisa langsung dihubungi di bawah ini :
            </p>
            <div class="contact-container">
                <div class="contact-form">
                    <form>
                        <h1 for="name">Name</h1>
                        <input type="text" id="name" name="name" required>

                        <h1 for="email">Email</h1>
                        <input type="email" id="email" name="email" required>

                        <h1 for="message">Message</h1>
                        <textarea id="message" name="message" rows="5" required></textarea>

                        <button type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!--FOOTER-->
    <footer>
        <div class="footer-content">
            <p>&copy; 2023 Proyek Perangkat Lunak. Universitas Sulawesi Barat.</p>
        </div>
        <div class="social-media">
                <a href="#"><i class="bx bxl-facebook"></i></a>
                <a href="#"><i class="bx bxl-twitter"></i></a>
                <a href="#"><i class="bx bxl-instagram-alt"></i></a>
                <a href="#"><i class="bx bxl-discord-alt"></i></a>
            </div>
    </footer>
    
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script src="assets/js/script_awal.js"></script>
</body>

</html>