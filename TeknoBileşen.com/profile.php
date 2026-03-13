<?php
session_start();
if (!isset($_SESSION["user"]) || !isset($_SESSION["user_id"])) {
    header("Location: login.php");
    die();
}

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'database.php'; // Veritabanı bağlantısını dahil et

$user_id = $_SESSION["user_id"]; // Kullanıcı ID'sini al

try {
    $sql = "SELECT f.*, 
        a.Marka AS anakart_marka, 
        a.Fiyat AS anakart_fiyat,
        a.satis_URL AS anakart_satis_url,
        i.Marka AS cpu_marka, 
        i.Fiyat AS cpu_fiyat,
        i.satis_URL AS cpu_satis_url,
        e.Marka AS gpu_marka,
        e.Fiyat AS gpu_fiyat,
        e.satis_URL AS gpu_satis_url,
        h.Marka AS hdd_marka,
        h.Fiyat AS hdd_fiyat,
        h.satis_URL AS hdd_satis_url,
        k.Marka AS kasa_marka,
        k.Fiyat AS kasa_fiyat,
        k.satis_URL AS kasa_satis_url,
        p.Marka AS powersupply_marka,
        p.Fiyat AS powersupply_fiyat,
        p.satis_URL AS powersupply_satis_url,
        r.Marka AS ram_marka,
        r.Fiyat AS ram_fiyat,
        r.satis_URL AS ram_satis_url,
        s.Marka AS sogutma_marka,
        s.Fiyat AS sogutma_fiyat,
        s.satis_URL AS sogutma_satis_url,
        t.Marka AS ssd_marka,
        t.Fiyat AS ssd_fiyat,
        t.satis_URL AS ssd_satis_url
        FROM favoriler AS f 
        LEFT JOIN anakart AS a ON f.hardware1_ID = a.urunler_ID
        LEFT JOIN cpu AS i ON f.hardware2_ID = i.urunler_ID
        LEFT JOIN gpu AS e ON f.hardware3_ID = e.urunler_ID
        LEFT JOIN hdd AS h ON f.hardware4_ID = h.urunler_ID
        LEFT JOIN kasa AS k ON f.hardware5_ID = k.urunler_ID
        LEFT JOIN powersupply AS p ON f.hardware6_ID = p.urunler_ID
        LEFT JOIN ram AS r ON f.hardware7_ID = r.urunler_ID
        LEFT JOIN sogutma AS s ON f.hardware8_ID = s.urunler_ID
        LEFT JOIN ssd AS t ON f.hardware9_ID = t.urunler_ID
        WHERE f.id = ?";
    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
        throw new Exception('Hazırlama hatası: ' . $conn->error);
    }
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $result = $stmt->get_result();

    $favorites = [];

    while ($row = $result->fetch_assoc()) {
        $favorites[] = $row;
    }

    $stmt->close();
    $conn->close();
} catch (Exception $e) {
    echo 'Hata: ' . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta     charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil - TeknoBileşen.com</title>
    <link rel="stylesheet" href="taslak.css">
    <style>
        /* CSS Başlangıcı */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        .container {
            max-width: 90%;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1, h2, h3, h4, h5, h6 {
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #158DBC;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            margin-right: 10px;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        .btn-satin-al {
            display: inline-block;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            margin-right: 10px;
        }

        .btn-satin-al:hover {
            background-color: #45a049;
        }

        header {
            background-color: #158DBC;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }

        .favorites {
            margin-top: 20px;
        }

        .favorites h2 {
            margin-bottom: 10px;
        }

        .favorites table {
            margin-top: 10px;
        }

        .favorites p {
            margin-top: 10px;
            color: #555;
            font-size: 18px;
        }

        .no-favorites {
            text-align: center;
            padding: 20px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-top: 20px;
        }

        .no-favorites p {
            font-size: 18px;
            color: #555;
        }

        .no-favorites .btn {
            margin-top: 10px;
        }
        /* CSS Bitişi */
    </style>
    <link rel="icon" href="Resimler/favicon/favicon.png" type="image/png">
    <script>
        function openAllLinks(urls) {
            urls.forEach(url => {
                window.open(url, '_blank');
            });
        }
    </script>
</head>
<body>
<header>
    <div class="logo">
        <a href="index.html">
            <img src="Resimler/Anamenü/tekno_bilesen_logo.svg">
        </a>
    </div>
    <div class="account-icon">
        <a href="login.php">
            <img src="Resimler/Anamenü/account_icon.svg">
        </a>
    </div>
</header>

<main class="main-content">
    <div class="container">
        <h1>Merhaba, <?php echo $_SESSION["user"]; ?></h1>
        <br>
        <div class="favorites">
            <h2>Favorilerim</h2>
            <?php if (!empty($favorites)): ?>
                <table>
                    <thead>
                        <tr>
                            <th>Anakart</th>
                            <th>İşlemci</th>
                            <th>Ekran Kartı</th>
                            <th>HDD</th>
                            <th>Kasa</th>
                            <th>Power Supply</th>
                            <th>RAM</th>
                            <th>Soğutma</th>
                            <th>SSD</th>
                            <th>Toplam Fiyat</th>
                            <th>İşlemler</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($favorites as $favorite): ?>
                            <tr>
                                <td><?php echo $favorite['anakart_marka']; ?></td>
                                <td><?php echo $favorite['cpu_marka']; ?></td>
                                <td><?php echo $favorite['gpu_marka']; ?></td>
                                <td><?php echo $favorite['hdd_marka']; ?></td>
                                <td><?php echo $favorite['kasa_marka']; ?></td>
                                <td><?php echo $favorite['powersupply_marka']; ?></td>
                                <td><?php echo $favorite['ram_marka']; ?></td>
                                <td><?php echo $favorite['sogutma_marka']; ?></td>
                                <td><?php echo $favorite['ssd_marka']; ?></td>
                                <td><?php echo number_format($favorite['anakart_fiyat'] + $favorite['cpu_fiyat'] + $favorite['gpu_fiyat'] + $favorite['hdd_fiyat'] + $favorite['kasa_fiyat'] + $favorite['powersupply_fiyat'] + $favorite['ram_fiyat'] + $favorite['sogutma_fiyat'] + $favorite['ssd_fiyat'], 0, ',', '.'); ?> ₺</td>
                                <td style="display: flex; align-items: center;">
                                    <button class="btn" onclick="openAllLinks([
                                        '<?php echo $favorite['anakart_satis_url']; ?>',
                                        '<?php echo $favorite['cpu_satis_url']; ?>',
                                        '<?php echo $favorite['gpu_satis_url']; ?>',
                                        '<?php echo $favorite['hdd_satis_url']; ?>',
                                        '<?php echo $favorite['kasa_satis_url']; ?>',
                                        '<?php echo $favorite['powersupply_satis_url']; ?>',
                                        '<?php echo $favorite['ram_satis_url']; ?>',
                                        '<?php echo $favorite['sogutma_satis_url']; ?>',
                                        '<?php echo $favorite['ssd_satis_url']; ?>'
                                    ])">Satın Al</button>
                                    <form action="sil.php" method="post" style="margin-left: 10px;">
                                        <input type="hidden" name="uniqe_ID" value="<?php echo $favorite['uniqe_ID']; ?>">
                                        <button type="submit" class="btn" style="background-color: red; color: white;">Sil</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php else: ?>
                <div class="no-favorites">
                    <p>Henüz favori ürününüz yok.</p>
                    <a href="sistem_topla.php" class="btn">Alışverişe Başla</a>
                </div>
            <?php endif; ?>
        </div>
        <br>
        <a href="logout.php" class="btn">Çıkış Yap</a>
    </div>
</main>

            <footer style="position: fixed; bottom: 0; width: 100%;">
                <div class="footer-content">
                <div class="text-1">teknobileşen.com © 2024</div>  
                <div class="text-2">  
                    <nav>             
                    <ul>
                        <li><a href="blog.html">Blog</a></li> | <li><a href="hakkimizda.html">Hakkımızda</a></li> | <li><a href="iletisim.html">İletişim</a></li>
                    </ul>
                </nav> 
                </div>
                </div>                        
            </footer>
</body>
</html>