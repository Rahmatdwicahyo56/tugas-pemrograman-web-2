<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Perusahaan Teknologi</title>
    <style>
        body {
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 20px;
        }

        img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
            margin-bottom: 10px;
        }

        .detail-container {
            max-width: 600px;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        a {
            text-decoration: none;
            color: #3498db;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="detail-container">

<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
// Mengambil data dari query string
$nama_perusahaan = isset($_GET['nama_perusahaan']) ? $_GET['nama_perusahaan'] : '';
$asal = isset($_GET['asal']) ? $_GET['asal'] : '';
$pendiri = isset($_GET['pendiri']) ? $_GET['pendiri'] : '';
$tahun_didirikan = isset($_GET['tahun_didirikan']) ? $_GET['tahun_didirikan'] : '';
$produk_layanan = isset($_GET['produk_layanan']) ? $_GET['produk_layanan'] : '';
$logo = isset($_GET['logo']) ? $_GET['logo'] : '';

// Menampilkan detail perusahaan
echo "<h2>Detail Perusahaan Teknologi</h2>";
echo "<img src='{$logo}' alt='{$nama_perusahaan}'>";
echo "<h3>{$nama_perusahaan}</h3>";
echo "<p><strong>Asal:</strong> {$asal}</p>";
echo "<p><strong>Pendiri:</strong> {$pendiri}</p>";
echo "<p><strong>Tahun Didirikan:</strong> {$tahun_didirikan}</p>";
echo "<p><strong>Produk/Layanan:</strong> {$produk_layanan}</p>";

// Menambahkan link untuk kembali ke halaman latihan5b.php
echo "<p><a href='latihan5b.php'>Kembali</a></p>";
?>

</div>

</body>
</html>
