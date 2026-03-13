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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['uniqe_ID'])) { // Sütunun adını değiştirdim
        $uniqe_ID = $_POST['uniqe_ID']; // Değişken adını değiştirdim

        // Silme sorgusu hazırla
        $sql = "DELETE FROM favoriler WHERE uniqe_ID = ?"; // Sorguyu güncelledim
        
        // Sorguyu hazırla ve bağlayıcı değişkeni ayarla
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $uniqe_ID); // Sütun tipine göre i harfini kullanabilirsin, varsayılan olarak int kabul ediyorum.
        
        if ($stmt->execute()) {
            // Yönlendirme yapmadan önce silme işleminin tamamlandığını belirtmek için bir mesaj göster
            echo "Başarıyla silinmiştir!";
            // Sonra yönlendirme yap
            echo "<script>window.location.href = 'profile.php';</script>";
            exit(); // Yönlendirme yapıldıktan sonra kodun devam etmemesi için exit() kullanılır
        } else {
            echo "Silme işlemi sırasında bir hata oluştu.";
        }
        
        // Bağlantıyı kapat
        $stmt->close();
    } else {
        echo "Silinmesi gereken bir ürün belirtilmemiş.";
    }
}
?>
