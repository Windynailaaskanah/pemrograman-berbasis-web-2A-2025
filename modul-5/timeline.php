<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Timeline Pengalaman Kuliah</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: rgb(248, 152, 224);
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

        .timeline {
            position: relative;
            border-left: 3px solid #ffffff;
            padding-left: 22px;
        }

        .timeline-title {
            font-size: 20px;
            font-weight: bold;
            color: #ffffff;
        }

        a {
            display: inline-block;
            padding: 10px 20px;
            text-decoration: none;
            background-color: rgb(250, 148, 253);
            color: white;
            border-radius: 5px;
            margin-right: 10px;
        }

        .event {
            position: relative;
            margin-bottom: 20px;
        }

        .event::before {
            content: "";
            position: absolute;
            left: -9px;
            top: 0;
            width: 16px;
            height: 16px;
            border-radius: 50%;
        }

        blockquote {
            font-style: italic;
            color: #555;
            border-left: 4px solid #ccc;
            padding-left: 10px;
            margin: 20px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="timeline-title">Timeline Pengalaman Kuliah</h2>

        <div class="timeline">
            <?php
            $timeline = [
                ["tahun" => "2024", "kegiatan" => "kegiatan ospek di Universitas Trunojoyo Madura"],
                ["tahun" => "2024", "kegiatan" => "kegiatan pembelajaran mata kuliah"],
                ["tahun" => "2024", "kegiatan" => "kegiatan praktikum algoritma pemrograman"], 
                ["tahun" => "2025", "kegiatan" => "pembelajaran semester 2"],  
            ];

            foreach ($timeline as $item) {
                echo "<div class='event'><strong>{$item['tahun']}:</strong> {$item['kegiatan']}</div>";
            }
            ?>
        </div>

        <br>

        <div class="timeline">
            <a href="halaman1.php">Kembali ke Profil</a>
            <a href="blog.php">Menuju Blog</a>
        </div>
    </div>
</body>
</html>
