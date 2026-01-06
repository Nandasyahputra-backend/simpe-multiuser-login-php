<?php
require_once __DIR__. '/../middleware/admin-auth-check.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Dashboard Admin</title>
</head>
<body>
    <section class="bg-white lg:grid lg:h-screen lg:place-content-center">
  <div class="mx-auto w-screen max-w-7xl px-4 py-16 sm:px-6 sm:py-24 lg:px-8 lg:py-32">
    <div class="mx-auto max-w-prose text-center">
      <h1 class="text-4xl font-bold text-gray-900 sm:text-5xl">
        Dashboard 
        <strong class="text-indigo-600"> Admin </strong>
      </h1>


      <div class="mt-4 flex justify-center gap-4 sm:mt-6">
        <a href="../process/logout.php" class="inline-block rounded border border-indigo-600 bg-indigo-600 px-5 py-3 font-medium text-white shadow-sm transition-colors hover:bg-indigo-700" >
          Logout
        </a>

      </div>
    </div>
  </div>
</section>
</body>
</html>
