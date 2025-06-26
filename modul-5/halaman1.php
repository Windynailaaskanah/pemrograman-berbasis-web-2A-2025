<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body {
    font-family: Arial, sans-serif;
    background-color:rgb(248, 152, 224);
    padding: 20px;
    font-family: 'Courier New', Courier, monospace;
    }

    .container {
        max-width: 900px;
        margin: 50px auto;
        background-color:rgb(252, 207, 224);
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.56);
    }

    h2, h3 {
        text-align: center;
        color:rgb(252, 121, 223);
    }

    table {
        border-collapse: collapse;
        width: 100%;
        margin-top: 15px;
    }

    table, th, td {
        border: 1px solid #ccc;
    }

    th, td {
        padding: 10px;
        text-align: left;
    }

    form {
        background-color: rgb(252, 207, 216);
        padding: 15px;
        border: 1px solid #ddd;
        margin-top: 20px;
    }

    input[type="text"],
    textarea,
    select {
        width: 100%;
        padding: 8px;
        margin: 6px 0;
        box-sizing: border-box;
    }

    input[type="submit"] {
        padding: 10px 20px;
        background-color:rgb(255, 52, 255);
        border: none;
        color: white;
        cursor: pointer;
        margin-top: 10px;
    }

    input[type="submit"]:hover {
        background-color:rgb(211, 44, 245);
    }
    .timeline {
        display: flex;
        justify-content: space-between;
        margin-top: 30px;
    }

    a {
      padding: 10px 20px;
      text-decoration: none;
      background-color:rgb(241, 121, 245);
      color: white;
      border-radius: 5px;
    }

    </style>
</head>
<body>
<div class="container">
<h2 text-center>Profil Interaktif Mahasiswa</h2>
<table border="1">
    <tr><th>Nama</th><td>Windy Naila Askanah</td></tr>
    <tr><th>NIM</th><td>240441100104</td></tr>
    <tr><th>Tempat, Tanggal Lahir</th><td>Samarinda, 07 Agustus 2006</td></tr>
    <tr><th>Email</th><td>windynaila16@gmail.com</td></tr>
    <tr><th>Nomor HP</th><td>085895763647</td></tr>
</table>


<hr>
<h3>Formulir Tambahan</h3>
<form method="post">
    Bahasa Pemrograman (pisahkan dengan koma):<br>
    <input type="text" name="bahasa[]"><br>

    Pengalaman Proyek:<br>
    <textarea name="pengalaman" rows="4" cols="40"></textarea><br><br>

    Software yang digunakan:<br>
    <input type="checkbox" name="software[]" value="VS Code"> VS Code<br>
    <input type="checkbox" name="software[]" value="XAMPP"> XAMPP<br>
    <input type="checkbox" name="software[]" value="Git"> Git<br><br>

    Sistem Operasi:<br>
    <input type="radio" name="os" value="Windows"> Windows<br>
    <input type="radio" name="os" value="Linux"> Linux<br>
    <input type="radio" name="os" value="Mac"> Mac<br><br>

    Penguasaan PHP:<br>
    <select name="tingkat">
        <option value="">-- Pilih --</option>
        <option value="Pemula">Pemula</option>
        <option value="Menengah">Menengah</option>
        <option value="Mahir">Mahir</option>
    </select><br><br>

    <input type="submit" name="submit" value="Kirim">
</form>

<?php
function tampilkanHasil($bahasa, $pengalaman, $software, $os, $tingkat) {
    echo "<h3>Hasil Input:</h3>";
    echo "<table border='1'>";
    echo "<tr><th>Bahasa Pemrograman</th><td>" . implode(", ", $bahasa) . "</td></tr>";
    echo "<tr><th>Pengalaman Proyek</th><td>$pengalaman</td></tr>";
    echo "<tr><th>Software</th><td>" . implode(", ", $software) . "</td></tr>";
    echo "<tr><th>Sistem Operasi</th><td>$os</td></tr>";
    echo "<tr><th>Penguasaan PHP</th><td>$tingkat</td></tr>";
    echo "</table>";


    if (count(array_filter($bahasa)) > 2) {
        echo "<p><strong>Anda cukup berpengalaman dalam pemrograman!</strong></p>";
    }
}

if (isset($_POST['submit'])) {
    $bahasa = array_filter($_POST['bahasa'] ?? []);
    $pengalaman = trim($_POST['pengalaman'] ?? '');
    $software = $_POST['software'] ?? [];
    $os = $_POST['os'] ?? '';
    $tingkat = $_POST['tingkat'] ?? '';

    if ($bahasa && $pengalaman && $software && $os && $tingkat) {
        tampilkanHasil($bahasa, $pengalaman, $software, $os, $tingkat);
    } else {
        echo "<p style='color:red;'>Semua input wajib diisi!</p>";
    }
}
?>

<div class="timeline">
    <a href="timeline.php" class="a">Menuju Timeline</a>
    <a href="blog.php" class="a">Menuju Blog</a>
</div>

</div>
</body>
</html>