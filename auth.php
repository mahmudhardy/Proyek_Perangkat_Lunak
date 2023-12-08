<?php

session_start();
if (!isset($_SESSION["user"])) {
    header("Location: index_login.php");
    exit();
}

// Access the user information from the session
$user = $_SESSION["user"];

// Check user role and perform actions accordingly
switch ($user['status']) {
    case 'Admin':
        // Allow access for Admin
        break;
    case 'Mahasiswa':
        // Allow access for Mahasiswa
        break;
    case 'Penyewa':
        // Allow access for Penyewa
        break;
    default:
        // Redirect to a default page or display an error message for unknown roles
        header("Location: error.php");
        exit();
}

?>
