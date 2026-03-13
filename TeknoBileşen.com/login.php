<?php
session_start();
if (isset($_SESSION["user"])) {
   header("Location: profile.php");
   die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş Yap - TeknoBileşen.com</title>
    <link rel="stylesheet" href="giris.css">
    <link rel="icon" href="Resimler\favicon\favicon.png" type="image/png">
    <style>
        .button-container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 100vh;
        }

        .button {
            width: 300px;
            margin: 10px;
            padding: 15px;
            background-color: #158DBC;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            font-size: 18px;
        }

        .button:hover {
            background-color: #0056b3;
        }

        .button-link {
            color: #007bff;
            text-decoration: none;
        }

        .button-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
     <header> 
        <div class="logo">
            <a href="index.html">
                <img src="Resimler/Anamenü/tekno_bilesen_logo.svg" alt="Tekno Bileşen Logo">
            </a>
        </div>

        <div class="account-icon">
            <a href="login.php">
                <img src="Resimler/Anamenü/account_icon.svg" alt="Hesap İkonu">
            </a>
        </div>
    </header>

    <div class="container">
        <?php
        if (isset($_POST["login"])) {
            $email = $_POST["email"];
            $password = $_POST["password"];
            $isim = $_POST["full_name"];
            require_once "database.php";
            $sql = "SELECT * FROM users WHERE email = '$email'";
            $result = mysqli_query($conn, $sql);
            $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
            if ($user) {
                if (password_verify($password, $user["password"])) {
                    $_SESSION["user"] = $user["full_name"];
                    $_SESSION["user_id"] = $user["id"];
                    echo "<h2 style=\"margin-bottom: 25px;\">Hoşgeldin, " . $_SESSION["user"] . "</h2>";
                    echo '<form action="index.html" method="get">
                            <button type="submit" class="button button-primary">Ana Sayfa</button>
                        </form>';

                    echo '<form action="profile.php" method="get">
                        <button type="submit" class="button button-profile">Profil</button>
                    </form>';

                    echo '<form action="logout.php" method="get">
                            <button type="submit" class="button button-secondary">Çıkış Yap</button>
                        </form>';



                    die();
                } else {
                    echo "<div class='alert alert-danger'>Şifre eşleşmiyor.</div>";
                }
            } else {
                echo "<div class='alert alert-danger'>E-posta eşleşmiyor.</div>";
            }
        }
        ?>
        <form action="login.php" method="post">
            <div class="form-group">
            <h2 style="margin-bottom: 25px;">GİRİŞ YAP</h2>
                <input type="email" placeholder="E-Posta" name="email" class="form-control" required>
            </div>
            <div class="form-group">
                <input type="password" placeholder="Şifre" name="password" class="form-control" required>
            </div>
            <div class="form-btn">
                <input type="submit" value="Giriş Yap" name="login" class="btn btn-primary">
            </div>
        </form>
        <div>
            
            <br>
            <p>Henüz kayıt olmadınız mı? <a href="registration.php">Kayıt Ol</a></p>
        </div>
    </div>
</body>
</html>
