<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Halaman Login</title>
</head>
<body>

<!-- alert -->

<?php

require_once __DIR__. '/../process/login.php';
require_once __DIR__. '/../components/red-alert.php';

red_alert('fail');

?>

<!-- end alert -->


<!-- form -->
    <form action="../process/login.php" method="POST" class="mt-20 mx-auto max-w-md space-y-4 rounded-lg border border-gray-300 bg-gray-100 p-6">
    <div>
        <label class="block text-sm font-medium text-gray-900" for="name">Username</label>

        <input class="mt-1 w-full rounded-lg border border-gray-300 focus:border-indigo-500 p-3 focus:outline-none" name="username" id="name" type="text" placeholder="Masukkan username">
    </div>

    <div>
        <label class="block text-sm font-medium text-gray-900" for="email">Password</label>

        <input class="mt-1 w-full rounded-lg border border-gray-300 focus:border-indigo-500 p-3 focus:outline-none" name="password" id="email" type="password" placeholder="Masukkan password">
    </div>


    <a href="register.php" class="text-medium text-indigo-500 underline">Register disini</a>

    <button class="mt-5 block w-full rounded-lg border border-indigo-600 bg-indigo-600 px-12 py-3 text-sm font-medium text-white transition-colors hover:bg-transparent hover:text-indigo-600" type="submit" name="login">
        Login
    </button>
    </form>

<!-- end form -->
</body>
</html>