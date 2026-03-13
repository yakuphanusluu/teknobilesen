<?php

session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
   die();
}

error_reporting(E_ALL);
ini_set('display_errors', 1);

$servername = "185.243.181.127";
$username = "teknobil_esen";
$password = "teknobilesen734";
$dbname = "teknobil_sat_veri";

// Bağlantıyı oluştur
$conn = new mysqli($servername, $username, $password, $dbname);

// Bağlantıyı kontrol et
if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}

// POST verilerini al
$hardware_ids = [];
for ($i = 1; $i <= 9; $i++) {
    if (isset($_POST["hardware{$i}_ID"])) {
        $hardware_ids[] = $_POST["hardware{$i}_ID"];
    } else {
        $hardware_ids[] = 0; // Eksik sütunlar için 0 değerini ayarla
    }
}

// Favoriler tablosuna ekleme sorgusu
$sql = "INSERT INTO favoriler (id, hardware1_ID, hardware2_ID, hardware3_ID, hardware4_ID, hardware5_ID, hardware6_ID, hardware7_ID, hardware8_ID, hardware9_ID)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param(
    "iiiiiiiiii",
    $_SESSION["user_id"],
    $hardware_ids[0],
    $hardware_ids[1],
    $hardware_ids[2],
    $hardware_ids[3],
    $hardware_ids[4],
    $hardware_ids[5],
    $hardware_ids[6],
    $hardware_ids[7],
    $hardware_ids[8]
);

if ($stmt->execute()) {
    header("refresh:0;url=profile.php");
    echo "Favoriler başarıyla kaydedildi! 2 saniye içinde profilinize yönlendiriliyorsunuz.";
} else {
    echo "Hata: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
