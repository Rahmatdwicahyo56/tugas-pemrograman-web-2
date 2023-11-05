<!DOCTYPE html>
<html>
<head>
    <style>
        .ganti-style {
            font-size: 28px;
            font-family: Arial, sans-serif;
            color: #1A0547;
            font-style: italic;
            font-weight: bold;
        }
    </style>
</head>
<body>
<?php
function ganti_style($tulisan, $kelas) {
    return '<p class="' . $kelas . '">' . $tulisan . '</p>';
}

$tulisan = "Hello world! Here I come!";
$kelas = "ganti-style";

echo ganti_style($tulisan, $kelas);
?>
</body>
</html>
