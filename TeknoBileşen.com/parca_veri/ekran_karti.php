<?php
// Web sayfasını indirin
$url = "https://www.akakce.com/ekran-karti/en-ucuz-asus-rog-strix-rtx-4090-rog-strix-rtx4090-24g-gaming-384-bit-gddr6x-24-gb-fiyati,2121797969.html";

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
        $sql ="UPDATE gpu SET Fiyat = '$product_price' WHERE GPU_ID = 1";

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
$url = "https://www.akakce.com/ekran-karti/en-ucuz-sapphire-rx-7800-xt-nitro-11330-01-20g-256-bit-gddr6-16-gb-fiyati,293257011.html";

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
        $sql ="UPDATE gpu SET Fiyat = '$product_price' WHERE GPU_ID = 2";

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
$url = "https://www.akakce.com/ekran-karti/en-ucuz-msi-rtx-4070-ti-gaming-x-slim-12g-192-bit-gddr6x-12-gb-fiyati,285126212.html";

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
        $sql ="UPDATE gpu SET Fiyat = '$product_price' WHERE GPU_ID = 3";

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
$url = "https://www.akakce.com/ekran-karti/en-ucuz-xfx-rx-7700-xt-speedster-qick-319-xt-black-rx-77tqickb9-192-bit-gddr6-12-gb-fiyati,275958736.html";

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
        $sql ="UPDATE gpu SET Fiyat = '$product_price' WHERE GPU_ID = 4";

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

///////////////////////////////////////////////////////////////////////////////////////

// Web sayfasını indirin
$url = "https://www.akakce.com/ekran-karti/en-ucuz-asus-rog-strix-rtx-4090-rog-strix-rtx4090-24g-gaming-384-bit-gddr6x-24-gb-fiyati,2121797969.html";

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
        $sql ="UPDATE gpu SET satici = '$satici' WHERE GPU_ID = 1";

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
$url = "https://www.akakce.com/ekran-karti/en-ucuz-sapphire-rx-7800-xt-nitro-11330-01-20g-256-bit-gddr6-16-gb-fiyati,293257011.html";

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
        $sql ="UPDATE gpu SET satici = '$satici' WHERE GPU_ID = 2";

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
$url = "https://www.akakce.com/ekran-karti/en-ucuz-msi-rtx-4070-ti-gaming-x-slim-12g-192-bit-gddr6x-12-gb-fiyati,285126212.html";

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
        $sql ="UPDATE gpu SET satici = '$satici' WHERE GPU_ID = 3";

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
$url = "https://www.akakce.com/ekran-karti/en-ucuz-xfx-rx-7700-xt-speedster-qick-319-xt-black-rx-77tqickb9-192-bit-gddr6-12-gb-fiyati,275958736.html";

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
        // Sadece <b> etiketi içindeki metni alın
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
        $sql = "UPDATE gpu SET satici = '$satici' WHERE GPU_ID = 4";

        if ($conn->query($sql) === TRUE) {
            echo "Satıcı başarıyla veritabanına eklendi.";
        } else {
            echo "Hata: " . $sql . "<br>" . $conn->error;
        }

        // Veritabanı bağlantısını kapatın
        $conn->close();
    } else {
        echo "Satıcı bilgisi bulunamadı.";
    }
} else {
    echo "Sayfa indirilemedi.";
}

?>