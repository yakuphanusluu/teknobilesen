<?php

// Web sayfasını indirin
$url = "https://www.akakce.com/harddisk/en-ucuz-western-digital-3-5-1-tb-black-wd1003fzex-sata-3-0-7200-rpm-hard-disk-fiyati,1970151.html";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36");
$response = curl_exec($ch);
curl_close($ch);

if ($response !== false) {
    $pattern = '/<span class="pt_v8">(.*?)<\/span>/';
    if (preg_match($pattern, $response, $matches)) {
        $product_price = $matches[1];

        $product_price = preg_replace('/\D/', '', $product_price); // Sadece rakamları al
        $product_price = substr($product_price, 0, -2); // Son 2 karakteri sil

        // Veritabanı bağlantısını kurun
        $servername = "185.243.181.127";
        $username = "teknobil_esen";
        $password = "teknobilesen734";
        $dbname = "teknobil_sat_veri";

        $conn = new mysqli($servername, $username, $password, $dbname);

        // Bağlantıyı kontrol edin
        if ($conn->connect_error) {
            die("Veritabanına bağlanılamadı: " . $conn->connect_error);
        }

        // Fiyat bilgisini veritabanına ekleyin
        $sql ="UPDATE hdd SET Fiyat = '$product_price' WHERE HDD_ID = 1";

        if ($conn->query($sql) === TRUE) {
            echo "Fiyat başarıyla veritabanına eklendi.";
        } else {
            echo "Hata: " . $sql . "<br>" . $conn->error;
        }

        // Veritabanı bağlantısını kapatın
        $conn->close();
    } else {
        echo "Fiyat bilgisi bulunamadı.";
    }
} else {
    echo "Sayfa indirilemedi.";
}

// Web sayfasını indirin
$url = "https://www.akakce.com/harddisk/en-ucuz-seagate-3-5-2-tb-skyhawk-st2000vx008-sata-3-0-5900-rpm-hard-disk-fiyati,17290437.html";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36");
$response = curl_exec($ch);
curl_close($ch);

if ($response !== false) {
    $pattern = '/<span class="pt_v8">(.*?)<\/span>/';
    if (preg_match($pattern, $response, $matches)) {
        $product_price = $matches[1];

        $product_price = preg_replace('/\D/', '', $product_price); // Sadece rakamları al
        $product_price = substr($product_price, 0, -2); // Son 2 karakteri sil

        // Veritabanı bağlantısını kurun
        $servername = "185.243.181.127";
        $username = "teknobil_esen";
        $password = "teknobilesen734";
        $dbname = "teknobil_sat_veri";

        $conn = new mysqli($servername, $username, $password, $dbname);

        // Bağlantıyı kontrol edin
        if ($conn->connect_error) {
            die("Veritabanına bağlanılamadı: " . $conn->connect_error);
        }

        // Fiyat bilgisini veritabanına ekleyin
        $sql ="UPDATE hdd SET Fiyat = '$product_price' WHERE HDD_ID = 2";

        if ($conn->query($sql) === TRUE) {
            echo "Fiyat başarıyla veritabanına eklendi.";
        } else {
            echo "Hata: " . $sql . "<br>" . $conn->error;
        }

        // Veritabanı bağlantısını kapatın
        $conn->close();
    } else {
        echo "Fiyat bilgisi bulunamadı.";
    }
} else {
    echo "Sayfa indirilemedi.";
}

// Web sayfasını indirin
$url = "https://www.akakce.com/harddisk/en-ucuz-seagate-3-5-14-tb-ironwolf-pro-st14000ne0008-sata-3-0-7200-rpm-hard-disk-fiyati,551857053.html";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36");
$response = curl_exec($ch);
curl_close($ch);

if ($response !== false) {
    $pattern = '/<span class="pt_v8">(.*?)<\/span>/';
    if (preg_match($pattern, $response, $matches)) {
        $product_price = $matches[1];

        $product_price = preg_replace('/\D/', '', $product_price); // Sadece rakamları al
        $product_price = substr($product_price, 0, -2); // Son 2 karakteri sil

        // Veritabanı bağlantısını kurun
        $servername = "185.243.181.127";
        $username = "teknobil_esen";
        $password = "teknobilesen734";
        $dbname = "teknobil_sat_veri";

        $conn = new mysqli($servername, $username, $password, $dbname);

        // Bağlantıyı kontrol edin
        if ($conn->connect_error) {
            die("Veritabanına bağlanılamadı: " . $conn->connect_error);
        }

        // Fiyat bilgisini veritabanına ekleyin
        $sql ="UPDATE hdd SET Fiyat = '$product_price' WHERE HDD_ID = 3";

        if ($conn->query($sql) === TRUE) {
            echo "Fiyat başarıyla veritabanına eklendi.";
        } else {
            echo "Hata: " . $sql . "<br>" . $conn->error;
        }

        // Veritabanı bağlantısını kapatın
        $conn->close();
    } else {
        echo "Fiyat bilgisi bulunamadı.";
    }
} else {
    echo "Sayfa indirilemedi.";
}
////////////////////////////////////////////////////////////////////////////////////////////////////////////

// Web sayfasını indirin
$url = "https://www.akakce.com/harddisk/en-ucuz-western-digital-3-5-1-tb-black-wd1003fzex-sata-3-0-7200-rpm-hard-disk-fiyati,1970151.html";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36");
$response = curl_exec($ch);
curl_close($ch);

if ($response !== false) {
    // İlgili HTML etiketlerini almak için uygun regex desenini belirleyin
    $pattern = '/<img class="v11281" src=".*?" alt="(.*?)"/';
    if (preg_match($pattern, $response, $matches)) {
        $satici = $matches[1];

        // Veritabanı bağlantısını kurun
        $servername = "185.243.181.127";
        $username = "teknobil_esen";
        $password = "teknobilesen734";
        $dbname = "teknobil_sat_veri";

        $conn = new mysqli($servername, $username, $password, $dbname);

        // Bağlantıyı kontrol edin
        if ($conn->connect_error) {
            die("Veritabanına bağlanılamadı: " . $conn->connect_error);
        }

        // Resim alt bilgisini veritabanına ekleyin
        $sql ="UPDATE hdd SET satici = '$satici' WHERE HDD_ID = 1";

        if ($conn->query($sql) === TRUE) {
            echo "Resim alt başarıyla veritabanına eklendi.";
        } else {
            echo "Hata: " . $sql . "<br>" . $conn->error;
        }

        // Veritabanı bağlantısını kapatın
        $conn->close();
    } else {
        echo "Resim alt bilgisi bulunamadı.";
    }
} else {
    echo "Sayfa indirilemedi.";
}

// Web sayfasını indirin
$url = "https://www.akakce.com/harddisk/en-ucuz-seagate-3-5-2-tb-skyhawk-st2000vx008-sata-3-0-5900-rpm-hard-disk-fiyati,17290437.html";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36");
$response = curl_exec($ch);
curl_close($ch);

if ($response !== false) {
    // İlgili HTML etiketlerini almak için uygun regex desenini belirleyin
    $pattern = '/<img class="v11070" src=".*?" alt="(.*?)"/';
    if (preg_match($pattern, $response, $matches)) {
        $satici = $matches[1];

        // Veritabanı bağlantısını kurun
        $servername = "185.243.181.127";
        $username = "teknobil_esen";
        $password = "teknobilesen734";
        $dbname = "teknobil_sat_veri";

        $conn = new mysqli($servername, $username, $password, $dbname);

        // Bağlantıyı kontrol edin
        if ($conn->connect_error) {
            die("Veritabanına bağlanılamadı: " . $conn->connect_error);
        }

        // Resim alt bilgisini veritabanına ekleyin
        $sql ="UPDATE hdd SET satici = '$satici' WHERE HDD_ID = 2";

        if ($conn->query($sql) === TRUE) {
            echo "Resim alt başarıyla veritabanına eklendi.";
        } else {
            echo "Hata: " . $sql . "<br>" . $conn->error;
        }

        // Veritabanı bağlantısını kapatın
        $conn->close();
    } else {
        echo "Resim alt bilgisi bulunamadı.";
    }
} else {
    echo "Sayfa indirilemedi.";
}

// Web sayfasını indirin
$url = "https://www.akakce.com/harddisk/en-ucuz-seagate-3-5-14-tb-ironwolf-pro-st14000ne0008-sata-3-0-7200-rpm-hard-disk-fiyati,551857053.html";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36");
$response = curl_exec($ch);
curl_close($ch);

if ($response !== false) {
    // İlgili HTML etiketlerini almak için uygun regex desenini belirleyin
    $pattern = '/<img class="v10694" src=".*?" alt="(.*?)"/';
    if (preg_match($pattern, $response, $matches)) {
        $satici = $matches[1];

        // Veritabanı bağlantısını kurun
        $servername = "185.243.181.127";
        $username = "teknobil_esen";
        $password = "teknobilesen734";
        $dbname = "teknobil_sat_veri";

        $conn = new mysqli($servername, $username, $password, $dbname);

        // Bağlantıyı kontrol edin
        if ($conn->connect_error) {
            die("Veritabanına bağlanılamadı: " . $conn->connect_error);
        }

        // Resim alt bilgisini veritabanına ekleyin
        $sql ="UPDATE hdd SET satici = '$satici' WHERE HDD_ID = 3";

        if ($conn->query($sql) === TRUE) {
            echo "Resim alt başarıyla veritabanına eklendi.";
        } else {
            echo "Hata: " . $sql . "<br>" . $conn->error;
        }

        // Veritabanı bağlantısını kapatın
        $conn->close();
    } else {
        echo "Resim alt bilgisi bulunamadı.";
    }
} else {
    echo "Sayfa indirilemedi.";
}
?>