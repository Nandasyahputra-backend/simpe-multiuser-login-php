<?php

session_start();
if(!isset($_SESSION['login'])) {
    header("Location: ../public/login.php");
    exit();
}

if($_SESSION['role'] !== 'admin') {
    die("Akses ditolak. Halaman khusus admin");
}

?>