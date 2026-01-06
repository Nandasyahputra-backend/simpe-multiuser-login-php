<?php

session_start();
require_once __DIR__. '/../config/koneksi.php';

if(isset($_POST['register'])) {
    $username = $_POST['username'];
    $password_raw = $_POST['password'];

    if(empty($username) || empty($password_raw)) {
        $_SESSION['emptyInput'] = "Anda belum memasukkan username dan password";
        header("Location: ../public/register.php");
        exit();
    }

    $password = password_hash($password_raw, PASSWORD_DEFAULT);

    $register = mysqli_query($conn, "INSERT INTO users (id, username, password) VALUES (NULL, '$username', '$password')");

    if($register) {
        $_SESSION['success'] = "Akun anda berhasil dibuat";
        header("Location: ../public/register.php");
        exit();
    }
}

?>