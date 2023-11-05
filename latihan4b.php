<!DOCTYPE html>
<html>
<head>
    <title>Daftar Negara ASEAN</title>
</head>
<body>
    <?php
    
    $negaraASEANAwal = ["Indonesia", "Singapura", "Malaysia", "Brunei", "Thailand"];

    $negaraASEANBaru = ["Indonesia", "Singapura", "Malaysia", "Brunei", "Thailand", "Laos", "Filipina", "Myanmar"];

    
    echo "<h2>Daftar Negara ASEAN awal :</h2>";
    echo "<ul>";
    foreach ($negaraASEANAwal as $negara) {
        echo "<li>$negara</li>";
    }
    echo "</ul>";

    echo "<h2>Daftar Negara ASEAN baru:</h2>";
    echo "<ul>";
    foreach ($negaraASEANBaru as $negara) {
        echo "<li>$negara</li>";
    }
    echo "</ul>";
    ?>
</body>
</html>
