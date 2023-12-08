<?php
session_start();

// Hapus semua data sesi
session_destroy();

// Redirect ke halaman awal yang diinginkan setelah logout
header("Location: ../index_awal.php");
exit;
?>
