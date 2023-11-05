<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Modul 2 - Latihan 1</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: lightblue;
            margin: 5px;
            float: left;
        }
        .clear {
            clear: both;
        }
    </style>
</head>
<body>
    <?php
    $jumlahBaris = 5;

    for ($i = 1; $i <= $jumlahBaris; $i++) {
        echo '<div class="clear"></div>';
        for ($j = 1; $j <= $i; $j++) {
            echo '<div class="kotak">' . $j . '</div>';
        }
    }
    ?>
</body>
</html>