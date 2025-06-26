<?php
require_once '../config/db.php';
session_start();

if (isset($_POST['login'])) {
    $username = trim($_POST['username']);
    $password = $_POST['password'];

    // Cegah SQL Injection dengan prepared statements
    $stmt = mysqli_prepare($conn, "SELECT * FROM users WHERE username = ?");
    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $user = mysqli_fetch_assoc($result);

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        header("Location: ../dashboard.php");
        exit;
    } else {
        $error = "Username atau password salah.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
        font-family: 'Comic Neue', cursive, sans-serif;
        }
        input:focus {
        outline: none;
        box-shadow: 0 0 8px 2px rgba(139,92,246,0.7);
        border-color: #8b5cf6; /* purple-500 */
        }
    </style>
</head>
<body class="bg-purple-100 flex items-center justify-center h-screen">
  <div class="bg-purple-300 rounded-2xl shadow-lg max-w-4xl w-full flex overflow-hidden relative">
    <div class="w-1/2">
      <img src="kantor.jpeg" alt="Login Image" class="h-full object-cover rounded-r-2xl">
    </div>
    <div class="p-8 w-1/2 relative">
      <h2 class="text-2xl font-bold font-sans text-white mb-6 text-center">Login</h2>
      <?php if (!empty($error)): ?>
        <div class="bg-red-100 text-red-700 px-4 py-2 mb-4 rounded"><?= $error ?></div>
      <?php endif; ?>
      <form method="POST" class="space-y-4 mb-12">
        <input type="text" name="username" placeholder="Username" class="w-full px-3 py-2 rounded-2xl bg-purple-100" required>
        <input type="password" name="password" placeholder="Password" class="w-full px-3 py-2 rounded-2xl bg-purple-100" required>
        <button name="login" class="w-full bg-gradient-to-r from-purple-500 to-pink-500 text-white py-2 rounded-2xl hover:from-pink-500 hover:to-purple-500 hover:scale-105 transition duration-300">Login</button>
        <p class="text-sm text-center mt-4"><a href="register.php" class="w-full text-white px-3 py-2 bg-purple-300 hover:underline hover:text-purple-800">Belum punya akun?</a></p>
      </form>
    </div>
          <svg class="absolute bottom-0 left-0 w-full h-20 z-0" viewBox="0 0 1440 320" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
        <path fill="#C084FC" fill-opacity="0.7" d="M0,224L48,202.7C96,181,192,139,288,117.3C384,96,480,96,576,122.7C672,149,768,203,864,213.3C960,224,1056,192,1152,165.3C1248,139,1344,117,1392,106.7L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z" />
      </svg>
    </div>
</body>

</html>