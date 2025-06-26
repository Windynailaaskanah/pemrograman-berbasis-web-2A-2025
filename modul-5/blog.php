<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog Reflektif</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: rgb(253, 161, 230);
      padding: 20px;
      color: #333;
    }

    .container {
      max-width: 900px;
      margin: 50px auto;
      background-color: rgb(252, 207, 216);
      padding: 30px;
      border-radius: 15px;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.56);
    }

    h2 {
      text-align: center;
      color:rgb(2, 2, 2);
    }

    ul {
      list-style-type: none;
      padding: 0;
    }

    li {
      margin: 10px 0;
      background-color: #fff;
      padding: 10px 15px;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    li a {
      text-decoration: none;
      color: #333;
      font-weight: bold;
    }

    li a:hover {
      color: #007BFF;
    }

    a.nav {
      display: inline-block;
      padding: 10px 20px;
      text-decoration: none;
      background-color: rgb(250, 148, 253);
      color: white;
      border-radius: 5px;
      margin-top: 20px;
    }
  </style>
</head>
<body>
<div class="container">
  <h2>Blog Reflektif</h2>

  <?php
  $artikel = [
      ["id" => 1, "judul" => "artikel refleksi 1"],
      ["id" => 2, "judul" => "artikel refleksi 2"],
  ];
  ?>

  <ul>
    <?php foreach ($artikel as $a): ?>
      <li><a href="artikel.php?id=<?= $a['id'] ?>"><?= $a['judul'] ?></a></li>
    <?php endforeach; ?>
  </ul>

  <a href="timeline.php" class="nav">Kembali ke Timeline</a>
    <a href="halaman1.php" class="nav">Kembali ke profil</a>
</div>
</body>
</html>
