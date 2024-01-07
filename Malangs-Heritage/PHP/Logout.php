<?php

include 'koneksi.php';
session_start();

session_unset();

session_destroy();

header('Location: ../3. Beranda/Beranda-Guest.html');
exit();
?>
