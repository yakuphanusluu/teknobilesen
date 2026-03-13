<?php

// Web sayfasını indirin
$url = "https://www.akakce.com/power-supply/en-ucuz-corsair-rm850x-cp-9020200-eu-850-w-fiyati,1272968502.html";

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
        $sql ="UPDATE powersupply SET Fiyat = '$product_price' WHERE Powersupply_ID = 1";

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
$url = "https://www.akakce.com/power-supply/en-ucuz-msi-mag-a750gl-750-w-fiyati,122734499.html";

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
        $sql ="UPDATE powersupply SET Fiyat = '$product_price' WHERE Powersupply_ID = 2";

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
$url = "https://www.akakce.com/power-supply/en-ucuz-be-quiet-bn314-dark-power-pro-12-750w-80-titanium-tam-moduler-guc-kaynagi-fiyati,1303102920.html";

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
        $sql ="UPDATE powersupply SET Fiyat = '$product_price' WHERE Powersupply_ID = 3";

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
$url = "https://www.akakce.com/power-supply/en-ucuz-corsair-rm850x-cp-9020200-eu-850-w-fiyati,1272968502.html";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36");
$response = curl_exec($ch);
curl_close($ch);

if ($response !== false) {
    // İlgili HTML etiketlerini almak için uygun regex desenini belirleyin
    $pattern = '/<img class="v11707" src=".*?" alt="(.*?)"/';
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
        $sql ="UPDATE powersupply SET satici = '$satici' WHERE Powersupply_ID = 1";

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
$url = "https://www.akakce.com/power-supply/en-ucuz-msi-mag-a750gl-750-w-fiyati,122734499.html";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36");
$response = curl_exec($ch);
curl_close($ch);

if ($response !== false) {
    // İlgili HTML etiketlerini almak için uygun regex desenini belirleyin
    $pattern = '/<img class="v11707" src=".*?" alt="(.*?)"/';
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
        $sql ="UPDATE powersupply SET satici = '$satici' WHERE Powersupply_ID = 2";

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
$url = "https://www.akakce.com/power-supply/en-ucuz-be-quiet-bn314-dark-power-pro-12-750w-80-titanium-tam-moduler-guc-kaynagi-fiyati,1303102920.html";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36");
$response = curl_exec($ch);
curl_close($ch);

if ($response !== false) {
    // İlgili HTML etiketlerini almak için uygun regex desenini belirleyin
    $pattern = '/<img class="v12088" src=".*?" alt="(.*?)"/';
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
        $sql ="UPDATE powersupply SET satici = '$satici' WHERE Powersupply_ID = 3";

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