<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: auth/login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
    body {
        font-family: 'Comic Neue', cursive, sans-serif;
    }
    </style>
</head>
<body class="bg-purple-100 min-h-screen flex items-center justify-center">

    <div class="bg-purple-300 p-8 rounded shadow-md w-full max-w-xl rounded-2xl">
        <h1 class="text-3xl font-bold mb-4 text-center text-white">Dashboard</h1>
        <p class="mb-5 text-center text-white">Selamat datang di Sistem Manajemen Karyawan dan Absensi!</p>

        <div class="flex flex-row gap-4 justify-center">
            <a href="karyawan/index.php" class="w-full bg-gradient-to-r from-purple-500 to-pink-500 text-white py-2 rounded-2xl hover:from-pink-500 hover:to-purple-500 hover:scale-105 transition duration-300 text-center">
                Kelola Data Karyawan
            </a>
            <a href="auth/logout.php" class="w-full bg-gradient-to-r from-purple-500 to-pink-500 text-white py-2 rounded-2xl hover:from-pink-500 hover:to-purple-500 hover:scale-105 transition duration-300 text-center">
                Logout
            </a>
        </div>
    </div>

</body>
</html>