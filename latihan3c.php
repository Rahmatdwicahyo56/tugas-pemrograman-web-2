<?php

function pangkat($angka, $pangkat) {
    $hasil = 1;
    
    for ($i = 1; $i <= $pangkat; $i++) {
        $hasil *= $angka;
    }
    
    return $hasil;
}

$angka = 5;
$pangkat = 4;
$hasil_pangkat = pangkat($angka, $pangkat);

echo '<div style="border: 1px solid #000; padding: 10px; width:120px;">';
echo "$angka pangkat $pangkat = $hasil_pangkat";
echo '</div>';

?>
