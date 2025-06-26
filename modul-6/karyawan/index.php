<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: ../auth/login.php");
    exit;
}

require_once '../config/db.php';
$result = mysqli_query($conn, "SELECT * FROM karyawan_absensi");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Data Karyawan</title>
    <script src="https://cdn.tailwindcss.com"></script>
        <style>
        body {
        font-family: 'Comic Neue', cursive, sans-serif;
        }

    </style>
</head>
<body class="bg-purple-100 min-h-screen p-10">
    <div class="bg-purple-300 p-6 rounded shadow-md">
        <h2 class="text-2xl font-bold text-white text-center mb-4">Data Karyawan</h2>
        <a href="tambah.php" class="bg-purple-500 text-white px-4 py-2 rounded hover:bg-purple-600 mb-4 inline-block">+ Tambah Data</a>
        <table class="w-full border border-collapse">
            <thead class="bg-purple-100 color-gray">
                <tr>
                    <th class="border px-2 py-1">NIP</th>
                    <th class="border px-2 py-1">Nama</th>
                    <th class="border px-2 py-1">Umur</th>
                    <th class="border px-2 py-1">JK</th>
                    <th class="border px-2 py-1">Departemen</th>
                    <th class="border px-2 py-1">Jabatan</th>
                    <th class="border px-2 py-1">Kota</th>
                    <th class="border px-2 py-1">Tanggal</th>
                    <th class="border px-2 py-1">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tbody>
    <?php if (mysqli_num_rows($result) > 0): ?>
        <?php while ($row = mysqli_fetch_assoc($result)): ?>
        <tr class="text-center">
            <td class="border px-2 py-1"><?= $row['nip'] ?></td>
            <td class="border px-2 py-1"><?= $row['nama'] ?></td>
            <td class="border px-2 py-1"><?= $row['umur'] ?></td>
            <td class="border px-2 py-1"><?= $row['jenis_kelamin'] ?></td>
            <td class="border px-2 py-1"><?= $row['departemen'] ?></td>
            <td class="border px-2 py-1"><?= $row['jabatan'] ?></td>
            <td class="border px-2 py-1"><?= $row['kota_asal'] ?></td>
            <td class="border px-2 py-1"><?= $row['tanggal_absensi'] ?></td>
            <td class="border px-2 py-1">
                <a href="edit.php?id=<?= $row['id'] ?>" class="text-blue-600 hover:underline">Edit</a> |
                <a href="hapus.php?id=<?= $row['id'] ?>" class="text-red-600 hover:underline" onclick="return confirm('Yakin ingin hapus?')">Hapus</a>
            </td>
        </tr>
        <?php endwhile; ?>
    <?php else: ?>
        <tr>
            <td colspan="9" class="text-center py-2 text-purple-600">Belum ada data karyawan.</td>
        </tr>
    <?php endif; ?>
</tbody>

        </table>
    </div>
</body>
</html>