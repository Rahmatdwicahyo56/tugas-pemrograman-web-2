<?php
$jawabanIsset = "Isset adalah = fungsi yang digunakan untuk memeriksa apakah suatu variabel atau elemen array telah didefinisikan dan tidak null.<br><br>";
$jawabanEmpty = "Empty adalah = fungsi yang digunakan untuk memeriksa apakah suatu variabel atau elemen array kosong. Variabel dikatakan kosong jika tidak didefinisikan atau nilainya adalah null, false, 0, string kosong, array kosong, atau objek tanpa properti.";

function soal($style) {
    global $jawabanIsset, $jawabanEmpty;
    echo '<div style="' . $style . '">';
    echo $jawabanIsset;
    echo $jawabanEmpty;
    echo '</div>';
}

soal("font-size: 16px; color: #333;");

?>
