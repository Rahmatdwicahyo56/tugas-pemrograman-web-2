<?php

function faktorial($a) {
    if ($a < 0) {
        return;
    } elseif ($a == 0 || $a == 1) {
        return 1;
    } else {
        $hasil = 1;
        for ($i = 2; $i <= $a; $i++) {
            $hasil *= $i;
        }
        return $hasil;
    }
}

$angka = 5;
$hasil_faktorial = faktorial($angka);

echo '<div style="border: 1px solid #000; padding: 10px; width: 150px;">';
echo "Faktorial dari $angka = $hasil_faktorial";
echo '</div>';

?>