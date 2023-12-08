<?php

require_once("config.php");

if (isset($_POST['login'])) {

    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

    $sql = "SELECT * FROM administrator WHERE username=:username OR email=:email";
    $stmt = $db->prepare($sql);

    // bind parameter ke query
    $params = array(
        ":username" => $username,
        ":email" => $username
    );

    $stmt->execute($params);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // jika user terdaftar
    if ($user) {
        // verifikasi password
        if (password_verify($password, $user["password"])) {
            // buat Session
            session_start();
            $_SESSION["user"] = $user;

            // Redirect based on user role
            switch ($user['status']) {
                case 'Admin':
                    header("Location: Administrator/informasi_admin.php");
                    break;
                case 'Mahasiswa':
                    header("Location: Administrator/informasi_mahasiswa.php");
                    break;
                case 'Penyewa':
                    header("Location: Administrator/informasi_penyewa.php");
                    break;
            }

        } else {
            // Password verification failed
            header("Location: error.php?error=invalid");
        }

    } else {
        // User not found
        header("Location: error.php?error=not_found");
    }
}
?>
