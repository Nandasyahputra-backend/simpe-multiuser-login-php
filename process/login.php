<?php

session_start();
require_once __DIR__. '/../config/koneksi.php';

if(isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $login = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");
    $user = mysqli_fetch_assoc($login);

    if($user && password_verify($password, $user['password'])) {
        $_SESSION['login'] = true;
        $_SESSION['role'] = $user['role'];
        $_SESSION['name'] = $user['name'];

        if($user['role'] === 'admin') {
            header("Location: ../admin/dashboard-admin.php");
        } else {
            header("Location: ../user/index.php");
        }
    }
    else {
        $_SESSION['fail'] = "Password anda salah";
        header("Location: ../public/login.php");
        exit();
    }
}

?>