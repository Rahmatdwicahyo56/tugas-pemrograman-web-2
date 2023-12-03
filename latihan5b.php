<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Perusahaan Teknologi</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            text-align: center;
            border: 1px solid black;
        }

        img {
            width: 100px;
            height: 100px;
        }
    </style>
</head>
<body>

<?php
$companies = [
    "Apple" => [
        "logo" => "https://www.apple.com/ac/structured-data/images/knowledge_graph_logo.png?202102080738",
        "nama_perusahaan" => "Apple Inc.",
        "pendiri" => "Steve Jobs, Steve Wozniak, dan Ronald Wayne",
        "tahun_didirikan" => 1976,
        "asal" => "Cupertino, California, Amerika Serikat",
        "produk_layanan" => "iPhone, iPad, Mac, Apple Watch, dll."
    ],
    "Microsoft" => [
        "logo" => "https://logos-world.net/wp-content/uploads/2020/09/Microsoft-Logo.png",
        "nama_perusahaan" => "Microsoft Corporation",
        "pendiri" => "Bill Gates dan Paul Allen",
        "tahun_didirikan" => 1975,
        "asal" => "Redmond, Washington, Amerika Serikat",
        "produk_layanan" => "Windows, Office, Azure, Xbox, dll."
    ],
    "Amazon" => [
        "logo" => "https://logo.clearbit.com/amazon.com",
        "nama_perusahaan" => "Amazon.com Inc.",
        "pendiri" => "Jeff Bezos",
        "tahun_didirikan" => 1994,
        "asal" => "Seattle, Washington, Amerika Serikat",
        "produk_layanan" => "Amazon.com, Amazon Web Services, Kindle, dll."
    ],
    "Alphabet" => [
        "logo" => "https://logos-world.net/wp-content/uploads/2022/05/Alphabet-Inc.-Logo.png",
        "nama_perusahaan" => "Alphabet Inc.",
        "pendiri" => "Larry Page dan Sergey Brin",
        "tahun_didirikan" => 2015,
        "asal" => "Mountain View, California, Amerika Serikat",
        "produk_layanan" => "Google Search, Android, YouTube, Chrome, dll."
    ],
    "Meta Platforms" => [
        "logo" => "https://upload.wikimedia.org/wikipedia/commons/a/ab/Meta-Logo.png",
        "nama_perusahaan" => "Meta Platforms Inc.",
        "pendiri" => "Mark Zuckerberg",
        "tahun_didirikan" => 2004,
        "asal" => "Menlo Park, California, Amerika Serikat",
        "produk_layanan" => "Facebook, Instagram, WhatsApp, Oculus, dll."
    ],
    "Tesla" => [
        "logo" => "https://logo.clearbit.com/tesla.com",
        "nama_perusahaan" => "Tesla, Inc.",
        "pendiri" => "Elon Musk, JB Straubel",
        "tahun_didirikan" => 2003,
        "asal" => "Palo Alto, California, Amerika Serikat",
        "produk_layanan" => "Tesla Model S, Model 3, Model X, Powerwall, dll."
    ],
    "Tencent" => [
        "logo" => "https://logo.clearbit.com/tencent.com",
        "nama_perusahaan" => "Tencent Holdings Limited",
        "pendiri" => "Pony Ma (Ma Huateng)",
        "tahun_didirikan" => 1998,
        "asal" => "Shenzhen, Guangdong, Tiongkok",
        "produk_layanan" => "WeChat, QQ, Honor of Kings, Tencent Cloud, dll."
    ],
    "Alibaba" => [
        "logo" => "https://logo.clearbit.com/alibabagroup.com",
        "nama_perusahaan" => "Alibaba Group Holding Limited",
        "pendiri" => "Jack Ma",
        "tahun_didirikan" => 1999,
        "asal" => "Hangzhou, Zhejiang, Tiongkok",
        "produk_layanan" => "Alibaba.com, Taobao, Tmall, AliExpress, dll."
    ],
    "Samsung" => [
        "logo" => "https://logo.clearbit.com/samsung.com",
        "nama_perusahaan" => "Samsung Electronics Co., Ltd.",
        "pendiri" => "Lee Byung-chul",
        "tahun_didirikan" => 1938,
        "asal" => "Suwon, Korea Selatan",
        "produk_layanan" => "Smartphones, Smart TVs, Home Appliances, dll."
    ],
    "NVIDIA" => [
        "logo" => "https://logo.clearbit.com/nvidia.com",
        "nama_perusahaan" => "NVIDIA Corporation",
        "pendiri" => "Jensen Huang",
        "tahun_didirikan" => 1993,
        "asal" => "Santa Clara, California, Amerika Serikat",
        "produk_layanan" => "Graphics Processing Units (GPUs), Deep Learning AI, Gaming Products, dll."
    ]
];

echo "<h2>Data Perusahaan Teknologi</h2>";
echo "<table>";
echo "<tr>
        <th>Logo</th>
        <th>Nama Perusahaan</th>
        <th>Pendiri</th>
        <th>Tahun Didirikan</th>
        <th>Asal</th>
        <th>Produk/Layanan</th>
      </tr>";

foreach ($companies as $company => $data) {
    echo "<tr>";
    echo "<td><img src='{$data['logo']}' alt='{$company}'></td>";
    echo "<td><a href='latihan5c.php?" . http_build_query($data) . "'>{$data['nama_perusahaan']}</a></td>";
    echo "<td>{$data['pendiri']}</td>";
    echo "<td>{$data['tahun_didirikan']}</td>";
    echo "<td>{$data['asal']}</td>";
    echo "<td>{$data['produk_layanan']}</td>";
    echo "</tr>";
}

echo "</table>";
?>

</body>
</html>
