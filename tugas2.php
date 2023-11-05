<!DOCTYPE html>
<html>
<head>
    <title>Data Perusahaan Teknologi</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            text-align: center;
            padding: 10px;
        }
    </style>
</head>
<body>
    <h1>Data Perusahaan Teknologi</h1>
    <h1><p>Nama: [Rahmat Dwi Cahyo]</p></h1>
    <h1><p>NIM: [701220025]</p></h1>
    <table>
        <tr>
            <th>Logo</th>
            <th>Nama Perusahaan</th>
            <th>Pendiri</th>
            <th>Tahun Didirikan</th>
            <th>Asal</th>
            <th>Produk/Layanan</th>
        </tr>

        <?php
        // Inisialisasi associative array untuk 10 perusahaan teknologi
        $data_perusahaan_teknologi = array(
            array(
                'Logo' => 'apple.png',
                'Nama Perusahaan' => 'Apple Inc.',
                'Pendiri' => 'Steve Jobs, Steve Wozniak, Ronald Wayne',
                'Tahun Didirikan' => 1976,
                'Asal' => 'Amerika Serikat',
                'Produk/Layanan' => 'iPhone, iPad, Mac, dll.',
            ),
            array(
                'Logo' => 'microsoft.png',
                'Nama Perusahaan' => 'Microsoft Corporation',
                'Pendiri' => 'Bill Gates, Paul Allen',
                'Tahun Didirikan' => 1975,
                'Asal' => 'Amerika Serikat',
                'Produk/Layanan' => 'Windows, Office, Azure, dll.',
            ),
            array(
                'Logo' => 'amazon.png',
                'Nama Perusahaan' => 'Amazon.com, Inc.',
                'Pendiri' => 'Jeff Bezos',
                'Tahun Didirikan' => 1994,
                'Asal' => 'Amerika Serikat',
                'Produk/Layanan' => 'E-commerce, AWS, Kindle, dll.',
            ),
            array(
                'Logo' => 'alphabet.png',
                'Nama Perusahaan' => 'Alphabet Inc. (Induk dari Google)',
                'Pendiri' => 'Larry Page, Sergey Brin',
                'Tahun Didirikan' => 2015,
                'Asal' => 'Amerika Serikat',
                'Produk/Layanan' => 'Mesin pencari, Android, YouTube, dll.',
            ),
            array(
                'Logo' => 'meta.png',
                'Nama Perusahaan' => 'Meta Platforms Inc. (Induk dari Facebook)',
                'Pendiri' => 'Mark Zuckerberg',
                'Tahun Didirikan' => 2004,
                'Asal' => 'Amerika Serikat',
                'Produk/Layanan' => 'Facebook, Instagram, WhatsApp, Oculus, dll.',
            ),
            array(
                'Logo' => 'tesla.png',
                'Nama Perusahaan' => 'Tesla, Inc.',
                'Pendiri' => 'Elon Musk, JB Straubel',
                'Tahun Didirikan' => 2003,
                'Asal' => 'Amerika Serikat',
                'Produk/Layanan' => 'Mobil listrik, baterai, tenaga surya, dll.',
            ),
            array(
                'Logo' => 'tencent.png',
                'Nama Perusahaan' => 'Tencent Holdings Limited',
                'Pendiri' => 'Pony Ma (Ma Huateng)',
                'Tahun Didirikan' => 1998,
                'Asal' => 'Tiongkok',
                'Produk/Layanan' => 'WeChat, gaming, media sosial, dll.',
            ),
            array(
                'Logo' => 'alibaba.png',
                'Nama Perusahaan' => 'Alibaba Group Holding Limited ',
                'Pendiri' => 'Jack Ma',
                'Tahun Didirikan' => 1999,
                'Asal' => 'Tiongkok',
                'Produk/Layanan' => 'Alibaba.com, Taobao, Tmall, dll.',
            ),
            array(
                'Logo' => 'samsung.png',
                'Nama Perusahaan' => 'Samsung Electronics Co., Ltd.',
                'Pendiri' => 'Lee Byung-chul',
                'Tahun Didirikan' => 1938,
                'Asal' => 'Korea Selatan',
                'Produk/Layanan' => 'Handphone, TV, perangkat elektronik, dll.',
            ),
            array(
                'Logo' => 'nvidia.png',
                'Nama Perusahaan' => 'NVIDIA Corporation',
                'Pendiri' => 'Jensen Huang',
                'Tahun Didirikan' => 1993,
                'Asal' => 'Amerika Serikat',
                'Produk/Layanan' => 'Kartu grafis, teknologi AI, perangkat keras, dll.',
            ),
        );

        // Menampilkan data perusahaan teknologi
        foreach ($data_perusahaan_teknologi as $perusahaan) {
            echo '<tr>';
            echo '<td><img src="' . $perusahaan['Logo'] . '" alt="' . $perusahaan['Nama Perusahaan'] . '" width="100"></td>';
            echo '<td>' . $perusahaan['Nama Perusahaan'] . '</td>';
            echo '<td>' . $perusahaan['Pendiri'] . '</td>';
            echo '<td>' . $perusahaan['Tahun Didirikan'] . '</td>';
            echo '<td>' . $perusahaan['Asal'] . '</td>';
            echo '<td>' . $perusahaan['Produk/Layanan'] . '</td>';
            echo '</tr>';
        }
        ?>

    </table>
</body>
</html>
