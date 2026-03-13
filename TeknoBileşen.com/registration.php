<?php
session_start();
if (isset($_SESSION["user"])) {
   header("Location: profile.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kayıt Ol - TeknoBileşen.com</title>
    <link rel="stylesheet" href="giris.css">
    <link rel="icon" href="Resimler\favicon\favicon.png" type="image/png">
</head>
<body>
	<header> 
        <div class="logo">
            <a href="index.html">
                <img src="Resimler/Anamenü/tekno_bilesen_logo.svg" alt="TeknoBileşen Logo">
            </a>
        </div>
        <div class="account-icon">
            <a href="login.php">
                <img src="Resimler/Anamenü/account_icon.svg" alt="Hesap İkonu">
            </a>
        </div>
    </header>
    <div class="container">
	<div class="title">KAYIT OL</div>
        <?php
        if (isset($_POST["submit"])) {
           $fullName = $_POST["fullname"];
           $email = $_POST["email"];
           $password = $_POST["password"];
           $passwordRepeat = $_POST["repeat_password"];
           
           $passwordHash = password_hash($password, PASSWORD_DEFAULT);

           $errors = array();
           
           if (empty($fullName) OR empty($email) OR empty($password) OR empty($passwordRepeat)) {
            array_push($errors,"Tüm alanların doldurulması gereklidir.");
           }
           if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            array_push($errors, "E-posta geçerli değil.");
           }
           if (strlen($password)<8) {
            array_push($errors,"Şifre en az 8 karakter içermelidir.");
           }
           if ($password!==$passwordRepeat) {
            array_push($errors,"Şifreler eşleşmiyor.");
           }
           require_once "database.php";
           $sql = "SELECT * FROM users WHERE email = '$email'";
           $result = mysqli_query($conn, $sql);
           $rowCount = mysqli_num_rows($result);
           if ($rowCount>0) {
            array_push($errors,"E-posta zaten kayıtlı!");
           }
           if (count($errors)>0) {
            foreach ($errors as  $error) {
                echo "<div class='alert alert-danger'>$error</div>";
            }
           }else{
            
            $sql = "INSERT INTO users (full_name, email, password) VALUES ( ?, ?, ? )";
            $stmt = mysqli_stmt_init($conn);
            $prepareStmt = mysqli_stmt_prepare($stmt,$sql);
            if ($prepareStmt) {
                mysqli_stmt_bind_param($stmt,"sss",$fullName, $email, $passwordHash);
                mysqli_stmt_execute($stmt);
                echo "<div class='alert alert-success'>Başarılı bir şekilde kaydoldunuz.</div>";
            }else{
                die("Bir şeyler ters gitti.");
            }
           }
          

        }
        ?>
        <form action="registration.php" method="post">
            <div class="form-group">
                <input type="text" class="form-control" name="fullname" placeholder="Ad Soyad">
            </div>
            <div class="form-group">
                <input type="emamil" class="form-control" name="email" placeholder="E-posta">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Şifre">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="repeat_password" placeholder="Şifre Tekrarı">
            </div>
            <div class="form-btn">
                <input type="submit" class="btn btn-primary" value="Kayıt Ol" name="submit">
            </div>
        </form>
        <div>
        <br>
        <div><p>Hesabınız var mı? <a href="login.php">Giriş Yap</a></p></div>
      </div>
    </div>
</body>
</html>