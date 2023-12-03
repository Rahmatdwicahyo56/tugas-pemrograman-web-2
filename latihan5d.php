<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan5a</title>
</head>
<body>

<form method="post" action="latihan5a.php">
    <label for="angka">Masukkan Jumlah Angka:</label>
    <input type="text" name="angka" id="angka">
    <button type="submit">Generate</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil jumlah angka dari input POST
    $angka = isset($_POST['angka']) ? intval($_POST['angka']) : 10;

    // Validasi agar angka tidak lebih dari 20
    $angka = min(20, $angka);

    // Tampilkan pola angka segitiga terbalik
    for ($i = 0; $i < $angka; $i++) {
        for ($j = 1; $j <= $angka - $i; $j++) {
            echo $j . ' ';
        }
        echo '<br>';
    }
}
?>

</body>
</html>
