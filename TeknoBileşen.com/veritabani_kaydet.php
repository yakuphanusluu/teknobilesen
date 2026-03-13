<?php
// Veritabanı bağlantı bilgileri
$servername = "185.243.181.127";
$database = "teknobil_esen";
$username = "teknobilesen734";
$password = "teknobil_sat_veri";

// Veritabanı bağlantısını oluştur
$conn = mysqli_connect($servername, $username, $password, $database);

// Bağlantıyı kontrol et
if (!$conn) {
    die("Bağlantı hatası: " . mysqli_connect_error());
}

// POST ile gelen verileri al
$cardContent = $_POST['cardContent']; // Burada 'cardContent' newCard içeriğini temsil ediyor

// Veritabanına ekleme sorgusu
$sql = "INSERT INTO favoriler (urunler_ID) VALUES ('$cardContent')";

// Sorguyu çalıştır ve sonucu kontrol et
if (mysqli_query($conn, $sql)) {
    echo "Yeni kayıt başarıyla oluşturuldu";
} else {
    echo "Hata: " . $sql . "<br>" . mysqli_error($conn);
}

// Veritabanı bağlantısını kapat
mysqli_close($conn);
?>
