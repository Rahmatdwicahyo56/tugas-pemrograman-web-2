<!DOCTYPE html>
<html>
<head>
    <title>Contoh Array dan Loop PHP</title>
</head>
<body>
<?php

$warna = array("hijau", "kuning", "kelabu", "merah muda", "biru");


echo "Balonku ada lima.<br>";
echo "Rupa-rupa warna-nya ";
for ($i = 0; $i < count($warna); $i++) {
    echo $warna[$i];
    if ($i < count($warna) - 1) {
        echo ", ";
    }
    if ($i == count($warna) - 2) {
        echo "dan ";
    }
}
echo "<br>";
echo "Meletus balon " . $warna[0] . " DOR!!!<br>";
echo "Hatiku sangat kacau..";
?>
</body>
</html>
