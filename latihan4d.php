<!DOCTYPE html>
<html>
<head>
    <title>Daftar Negara</title>
</head>
<body>
    <h1>Daftar Negara</h1>
    <table border="1">
        <tr>
            <th>Negara</th>
            <th>Ibukota</th>
            <th>Kode Telepon</th>
            <th>Makanan Khas</th>
            <th>Harga</th>
        </tr>
        <?php
        $urutan_negara = array("Indonesia", "Singapura", "Malaysia", "Brunei", "Thailand", "Laos", "Filipina", "Myanmar");

        $negara = array(
            array("Negara" => "Indonesia", "Ibukota" => "DKI Jakarta", "Kode Telepon" => "+62", "Makanan Khas" => "Rendang", "Harga" => "Rp 50,000"),
            array("Negara" => "Singapura", "Ibukota" => "Singapura", "Kode Telepon" => "+65", "Makanan Khas" => "Hainanese Chicken Rice", "Harga" => "SGD 5.00"),
            array("Negara" => "Malaysia", "Ibukota" => "Kuala Lumpur", "Kode Telepon" => "+60", "Makanan Khas" => "Nasi Lemak", "Harga" => "MYR 5.00"),
            array("Negara" => "Brunei", "Ibukota" => "Bandar Seri Begawan", "Kode Telepon" => "+673", "Makanan Khas" => "Ambuyat", "Harga" => "BND 10.00"),
            array("Negara" => "Thailand", "Ibukota" => "Bangkok", "Kode Telepon" => "+66", "Makanan Khas" => "Pad Thai", "Harga" => "THB 40.00"),
            array("Negara" => "Laos", "Ibukota" => "Vientiane", "Kode Telepon" => "+856", "Makanan Khas" => "Laap", "Harga" => "LAK 30,000"),
            array("Negara" => "Filipina", "Ibukota" => "Manila", "Kode Telepon" => "+63", "Makanan Khas" => "Adobo", "Harga" => "PHP 100.00"),
            array("Negara" => "Myanmar", "Ibukota" => "Naypyidaw", "Kode Telepon" => "+95", "Makanan Khas" => "Mohinga", "Harga" => "MMK 2,000")
        );

        // Mengurutkan array berdasarkan urutan_negara
        $sorted_negara = array();
        foreach ($urutan_negara as $negara_tertentu) {
            foreach ($negara as $data) {
                if ($data["Negara"] == $negara_tertentu) {
                    $sorted_negara[] = $data;
                    break;
                }
            }
        }

        foreach ($sorted_negara as $data) {
            echo "<tr>";
            echo "<td>" . $data["Negara"] . "</td>";
            echo "<td>" . $data["Ibukota"] . "</td>";
            echo "<td>" . $data["Kode Telepon"] . "</td>";
            echo "<td>" . $data["Makanan Khas"] . "</td>";
            echo "<td>" . $data["Harga"] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
