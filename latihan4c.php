<!DOCTYPE html>
<html>
<head>
    <title>Daftar Negara ASEAN dan Ibukotanya</title>
</head>
<body>
    <h2>Daftar Negara ASEAN dan Ibukota:</h2>
    <ul>
    <?php
    
    $negara_asean = array(
        "Indonesia" => "DKI Jakarta",
        "Singapura" => "Singapura",
        "Malaysia" => "Kuala Lumpur",
        "Brunei" => "Bandar Seri Begawan",
        "Thailand" => "Bangkok",
        "Laos" => "Vientiane",
        "Filipina" => "Manila",
        "Myanmar" => "Naypyidaw"
    );

    
    foreach ($negara_asean as $negara => $ibukota) {
        echo "<li>$negara : $ibukota</li>";
    }
    ?>
    </ul>
</body>
</html>
