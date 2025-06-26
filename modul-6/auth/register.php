<?php
require_once '../config/db.php';
session_start();

if (isset($_POST['register'])) {
    $username = trim($_POST['username']);
    $password = $_POST['password'];

    if ($username === '' || $password === '') {
        $error = "Semua field wajib diisi.";
    } else {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $stmt = mysqli_prepare($conn, "INSERT INTO users (username, password) VALUES (?, ?)");
        mysqli_stmt_bind_param($stmt, "ss", $username, $hashedPassword);

        if (mysqli_stmt_execute($stmt)) {
            $_SESSION['success'] = "Registrasi berhasil. Silakan login.";
            header("Location: login.php");
            exit;
        } else {
            $error = "Username sudah digunakan atau terjadi kesalahan.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registrasi</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
        font-family: 'Comic Neue', cursive, sans-serif;
        }
    </style>
</head>
<body class="bg-purple-100 h-screen flex items-center justify-center">
    <div class="bg-purple-300 rounded-2xl shadow-lg max-w-4xl w-full flex overflow-hidden relative">
        <div class="w-1/2">
            <img src="kantor.jpeg" alt="Login Image" class="h-full object-cover rounded-r-2xl">
        </div>
            <div class="bg-purple-300 p-8 rounded-2xl shadow w-full max-w-md">
            <h2 class="text-2xl font-bold text-white mb-6 text-center">Registrasi</h2>
            <?php if (!empty($error)): ?>
                <div class="bg-red-100 text-red-700 px-4 py-2 rounded mb-4"><?= $error ?></div>
            <?php endif; ?>

            <form method="POST" class="space-y-4 mb-12">
                <div>
                    <label for="username" class="block text-sm font-medium text-white rounded-2xl">Username</label>
                    <input type="text" name="username" id="username" class="w-full px-3 py-2 border rounded-2xl focus:outline-none focus:ring focus:ring-purple-200">
                </div>
                <div>
                    <label for="password" class="block text-sm font-medium text-white rounded-2xl">Password</label>
                    <input type="password" name="password" id="password" class="w-full px-3 py-2 border rounded-2xl focus:outline-none focus:ring focus:ring-purple-200">
                </div>
                <div>
                    <button type="submit" name="register" class="w-full bg-gradient-to-r from-purple-500 to-pink-500 text-white py-3 rounded-2xl hover:bg-purple-600">Daftar</button>
                </div>
                <div class="text-center">
                    <a href="login.php" class="w-full text-white px-3 py-2 bg-purple-300 hover:underline hover:text-purple-800">Sudah punya akun? Login</a>
                </div>
      <svg class="absolute bottom-0 left-0 w-full h-20 z-0" viewBox="0 0 1440 320" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
        <path fill="#C084FC" fill-opacity="0.7" d="M0,224L48,202.7C96,181,192,139,288,117.3C384,96,480,96,576,122.7C672,149,768,203,864,213.3C960,224,1056,192,1152,165.3C1248,139,1344,117,1392,106.7L1440,96L1440,320L0,320Z" />
      </svg>
    </div>
</body>
</html>