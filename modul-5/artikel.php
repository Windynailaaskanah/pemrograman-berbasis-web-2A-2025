<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Reflektif</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        body {
            padding-top: 70px;
            background-color:rgb(245, 155, 225);
        }
        .content {
            max-width: 900px;
            margin: auto;
            background-color: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
        }
        img {
            max-width: 100%;
            border-radius: 10px;
        }
        blockquote {
            margin-top: 20px;
            padding: 15px;
            background-color:rgb(250, 202, 240);
            border-left: 5px solidrgb(255, 72, 246);
            font-style: italic;
        }
        h2 {
            text-align: center;
            color: #d63384;
        }
        a.btn-link {
            color: #d63384;
        }
        a.btn-link:hover {
            color: #ad2a6e;
        }
        .btn {
            background-color: #ffe6f0;
            border-color: #f7c1e0;
            color: #d63384;
            font-weight: 500;
        }
        .btn:hover {
            background-color: #fcd6eb;
            color: #ad2a6e;
        }
    </style>
</head>
<body>

<div class="content">
<?php
$artikel = [
    [
        'judul' => 'Tutorial Belajar PHP Dasar Untuk Pemula',
        'file' => '1',
        'tanggal' => '11 februari 2020',
        'gambar' => 'image1.png',
        'sumber' => 'https://jagongoding.com/web/php/dasar/overview/',
        'kutipan' => [
            "Belajar yang rajin ya soalnya udah gaada yang bisa di aduin kalo codingannya eror",
        ]
    ],
    [
        'judul' => 'Tips Mengatasi codingan eror',
        'file' => '2',
        'tanggal' => '12 februari 2025',
        'gambar' => 'imag2e.png',
        'sumber' => 'https://developer.gitech-indonesia.co.id/2025/02/12/tips-mengatasi-codingan-error/',
        'kutipan' => [
            "kalau eror itu yang dilihat codingannya jangan malah nangis",
        ]
    ],
];

function tampilkanKutipan($list) {
    return $list[rand(0, count($list)-1)];
}

if (isset($_GET['id'])) {
    $id = $_GET['id'] - 1;
    if (isset($artikel[$id])) {
        $post = $artikel[$id];
        echo "<h2>{$post['judul']}</h2>";
        echo "<p class='text-muted'><i>Diposting pada: {$post['tanggal']}</i></p>";
        echo "<img src='{$post['gambar']}' alt='{$post['judul']}' class='mb-4'><br>";

        if ($id == 0) {
            echo '<p>Ini adalah seri tutorial belajar PHP 7 dasar, semua materi pada seri ini disesuaikan untuk pemula yang ingin memulai perjalanannya sebagai programmer PHP. Kita akan mempelajari bahasa pemrograman PHP dari bagiannya yang paling dasar. Mulai dari file PHP, variabel, tipe data, logika, pembahasan tentang fungsi, pembahasan tentang string, array dan lain sebagainya. Jika sebelumnya anda pernah belajar bahasa Java, C++, atau bahasa pemrograman yang lainnya, mempelajari bahasa pemrograman PHP akan lebih mudah karena ia masih memiliki beberapa struktur yang sama. Akan tetapi jika PHP adalah bahasa pemrograman yang pertama kali anda pelajari, anda tidak perlu khawatir. Dengan mengikuti tutorial PHP ini, insyaallah anda akan bisa menguasainya dengan mudah.</p>';
            echo "<a href='{$post['sumber']}' class='btn btn-link'>Selengkapnya</a>";
        } elseif ($id == 1) {
            echo '<p>Tips Mengatasi Codingan Error? Dalam dunia pemrograman, mengatasi kesalahan dan melakukan debugging yang efektif adalah kunci sukses. Oleh karena itu, kami akan mengulas Tips Pemrograman untuk Mengatasi Kesalahan Umum dan Debugging yang Efektif. Apakah Sobat Netizen sudah familiar dengan topik ini? dalam artikel ini, kami akan mengupas tuntas tips-tips ampuh untuk mengatasinya. Yuk, simak!</p>';
            echo "<a href='{$post['sumber']}' class='btn btn-link'>Baca selengkapnya di sini yaa!!!</a>";
        }

        echo "<blockquote>Kutipan: \"" . tampilkanKutipan($post['kutipan']) . "\"</blockquote>";
        echo '<a href="blog.php" class="btn mt-3">Kembali ke daftar artikel</a>';
    } else {
        echo "<p class='text-danger'>Artikel tidak ditemukan.</p>";
    }
} else {
    echo "<h3>Daftar Artikel:</h3><ul class='list-group'>";
    foreach ($artikel as $index => $post) {
        $no = $index + 1;
        echo "<li class='list-group-item'><a href='blogreflektif.php?id=$no'>{$post['judul']} <span class='text-muted'>({$post['tanggal']})</span></a></li>";
    }
    echo "</ul>";
}
?>
</div>

</body>
</html>