<?php require_once("../auth.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Proyek Perangkat Lunak</title>
    <link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css'>
    <link rel='stylesheet'
        href='https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&amp;display=swap'>
    <link rel="stylesheet" type="text/css" href="../assets/css/style_tambah.css">

    <!-- ICONS -->
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/Logo_baru.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../assets/img/Logo_baru.png">

</head>

<body>
    <div class="container">
        <div class="text"> Tambah Informasi </div>
        <form action="#">
            <div class="form-row">
                <div class="input-data">
                    <input type="text" required>
                    <div class="underline"></div>
                    <label for="">Nama</label>
                </div>
                <div class="input-data">
                    <input type="text" required>
                    <div class="underline"></div>
                    <label for="">Topik Pembahasan</label>
                </div>
            </div>
            <div class="form-row">
                <div class="input-data textarea">
                    <textarea rows="8" cols="80" required></textarea>
                    <br />
                    <div class="underline"></div>
                    <label for="">Tulis pesan Anda</label>
                    <br />
                    <div class="form-row submit-btn">
                        <div class="input-data">
                            <div class="inner"></div>
                            <input type="submit" value="submit">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>

</html>