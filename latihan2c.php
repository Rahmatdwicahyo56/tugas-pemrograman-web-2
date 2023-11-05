<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Modul 2 - Latihan 1</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            margin: 5px;
            float: left;
        }
        .clear {
            clear: both;
        }
        .ganjil {
            background-color: #003;
            color: #fff;
        }
        .genap {
            background-color: #999;
        }
    </style>
</head>
<body>
    <?php
    $jumlahBaris = 5;

    for ($i = 1; $i <= $jumlahBaris; $i++) {
        echo '<div class="clear"></div>';
        for ($j = 1; $j <= $i; $j++) {
            $kelas = ($i % 2 == 0) ? 'genap' : 'ganjil';
            echo '<div class="kotak ' . $kelas . '">' . $j . '</div>';
        }
    }
    ?>
</body>
</html>