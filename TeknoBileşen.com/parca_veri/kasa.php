<?php

// Web sayfasını indirin
$url = "https://www.akakce.com/bilgisayar-kasasi/en-ucuz-nzxt-h510-flow-ca-h52fw-01-beyaz-atx-mid-tower-pc-oyun-kasasi-fiyati,1744542244.html";

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
        $sql ="UPDATE kasa SET Fiyat = '$product_price' WHERE Kasa_ID = 1";

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
$url = "https://www.akakce.com/bilgisayar-kasasi/en-ucuz-corsair-4000d-airflow-cc-9011201-ww-fanli-atx-oyuncu-kasasi-fiyati,811352396.html";

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
        $sql ="UPDATE kasa SET Fiyat = '$product_price' WHERE Kasa_ID = 2";

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
$url = "https://www.akakce.com/bilgisayar-kasasi/en-ucuz-be-quiet-pure-base-500dx-bgw38-atx-oyuncu-kasasi-fiyati,732341670.html";

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
        $sql ="UPDATE kasa SET Fiyat = '$product_price' WHERE Kasa_ID = 3";

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
$url = "https://www.akakce.com/bilgisayar-kasasi/en-ucuz-nzxt-h510-flow-ca-h52fw-01-beyaz-atx-mid-tower-pc-oyun-kasasi-fiyati,1744542244.html";

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
        $sql ="UPDATE kasa SET satici = '$satici' WHERE Kasa_ID = 1";

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
$url = "https://www.akakce.com/bilgisayar-kasasi/en-ucuz-corsair-4000d-airflow-cc-9011201-ww-fanli-atx-oyuncu-kasasi-fiyati,811352396.html";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36");
$response = curl_exec($ch);
curl_close($ch);

if ($response !== false) {
    // İlgili HTML etiketlerini almak için uygun regex desenini belirleyin
    $pattern = '/<img class="v10001" src=".*?" alt="(.*?)"/';
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
        $sql ="UPDATE kasa SET satici = '$satici' WHERE Kasa_ID = 2";

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
$url = "https://www.akakce.com/bilgisayar-kasasi/en-ucuz-be-quiet-pure-base-500dx-bgw38-atx-oyuncu-kasasi-fiyati,732341670.html";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36");
$response = curl_exec($ch);
curl_close($ch);

if ($response !== false) {
    // İlgili HTML etiketlerini almak için uygun regex desenini belirleyin
    $pattern = '/<span class="v_v8">\s*<b>(.*?)<\/b>/';
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
        $sql ="UPDATE kasa SET satici = '$satici' WHERE Kasa_ID = 3";

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