<?php

// Web sayfasını indirin
$url = "https://www.akakce.com/ram/en-ucuz-corsair-vengeance-rgb-pro-8gb-3200mhz-ddr4-cl16-cmw8gx4m1z3200c16-fiyati,784606635.html";

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
        $sql ="UPDATE ram SET Fiyat = '$product_price' WHERE Ram_ID = 1";

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
$url = "https://www.akakce.com/ram/en-ucuz-g-skill-trident-z5-rgb-32-gb-2x16-6000-mhz-ddr5-cl36-f5-6000j3636f16gx2-tz5rw-fiyati,293271041.html";

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
        $sql ="UPDATE ram SET Fiyat = '$product_price' WHERE Ram_ID = 2";

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
$url = "https://www.akakce.com/ram/en-ucuz-corsair-dominator-platinum-rgb-32-gb-2x16-3200mhz-ddr4-cl16-cmt32gx4m2c3200c16-fiyati,459208765.html";

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
        $sql ="UPDATE ram SET Fiyat = '$product_price' WHERE Ram_ID = 3";

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
$url = "https://www.akakce.com/anakart/en-ucuz-asrock-z790-taichi-intel-lga1700-ddr5-atx-fiyati,1272776.html";

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
        $sql ="UPDATE anakart SET Fiyat = '$product_price' WHERE Anakart_ID = 4";

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
$url = "https://www.akakce.com/ram/en-ucuz-corsair-vengeance-rgb-pro-8gb-3200mhz-ddr4-cl16-cmw8gx4m1z3200c16-fiyati,784606635.html";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36");
$response = curl_exec($ch);
curl_close($ch);

if ($response !== false) {
    // İlgili HTML etiketlerini almak için uygun regex desenini belirleyin
    $pattern = '/<img class="v3207" src=".*?" alt="(.*?)"/';
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
        $sql ="UPDATE ram SET satici = '$satici' WHERE Ram_ID = 1";

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
$url = "https://www.akakce.com/ram/en-ucuz-g-skill-trident-z5-rgb-32-gb-2x16-6000-mhz-ddr5-cl36-f5-6000j3636f16gx2-tz5rw-fiyati,293271041.html";

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
        $sql ="UPDATE ram SET satici = '$satici' WHERE Ram_ID = 2";

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
$url = "https://www.akakce.com/ram/en-ucuz-corsair-dominator-platinum-rgb-32-gb-2x16-3200mhz-ddr4-cl16-cmt32gx4m2c3200c16-fiyati,459208765.html";

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
        $sql ="UPDATE ram SET satici = '$satici' WHERE Ram_ID = 3";

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