<?php
$servername = "185.243.181.127";
$username = "teknobil_esen";
$password = "teknobilesen734";
$dbname = "teknobil_login_register";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ürün ID ve URL'yi POST verilerinden alalım
    $urunler_ID = $_POST['urunler_ID'];
    $urunler_URL = $_POST['satis_URL'];

    // Favorilere ekleme sorgusunu hazırlayalım
    $sql = "INSERT INTO favoriler (urunler_ID, urunler_URL) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);

    // Ürün ID ve URL'sini bağlayalım
    $stmt->bind_param("is", $urunler_ID, $urunler_URL);

    // Sorguyu çalıştıralım
    if ($stmt->execute()) {
        echo "Başarılı";
    } else {
        echo "Hata: " . $stmt->error;
    }

    // Bağlantıyı ve hazırlanan sorguyu kapatalım
    $stmt->close();
}

// Veritabanı bağlantısını kapat
$conn->close();
?>