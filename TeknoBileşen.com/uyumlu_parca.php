<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uyumlu Parça Sihirbazı - TeknoBileşen.com</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="Resimler/favicon/favicon.png" type="image/png">
    <style>
        body {
            background: url('https://images.unsplash.com/photo-1518770660439-4636190af475') no-repeat center center fixed;
            background-size: cover;
            color: #fff;
            font-family: 'Arial', sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
        }
        header {
        height: 85px;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: #158DBC;
        padding: 20px 25px;
        }
        .logo {
            display: inline-block;
            margin-right: 20px;
        }
        .logo img {
            height: 70px;
            weight: auto;
        }
        .account-icon {
            display: inline-block;
            position: absolute;
            right: 25px;
        }
        .account-icon img {
            height: 60px;
            weight: auto;
        }
        .main-content {
            background: rgba(0, 0, 0, 0.7);
            padding: 30px;
            width: 500px;
            max-width: 600px;
            margin: 100px auto 20px;
            flex-grow: 1;
            margin-top: 200px;
        }
        .form-group {
            color: black;
        }
        .card-title {
            color: black;
        }
        footer{
   background-color: #158DBC; 
   color: white;
   font-size: 20px;
   padding: 7px 0;
}

.footer-content{
   display: flex;
   justify-content: space-between;
   align-items: center;
}

.text-1{
    padding-left: 30px;
    padding-bottom: 0px;
}

.text-2{
    display: flex;
    justify-content: flex-end;
    align-items: center;
    padding-right: 30px;
}

.text-2 nav ul{
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding-right: 60px;
}

nav{
    display: inline-block;
    width: calc(100% - 103px);
}
nav ul{
   list-style-type: none; 
}
nav ul li{
    display: inline;
    margin: 10px 30px;
}
nav ul li a{
    text-decoration: none;
    color: white;
    padding: 15px 25px;
    font-size: 20px;
} 
nav ul li a:hover{
    background-color: white; 
    color: black;
}
        .content-container {
            display: flex;
            justify-content: space-around;
            margin: 0 auto;
            max-width: 1200px;
            flex-wrap: wrap;
        }
        .alert-success {
            color: white;
            background-color: green;
        }
        .alert-danger {
            color: white;
            background-color: red;
        }
    </style>
</head>
<body>
<header>
    <div class="logo">
        <a href="index.html">
            <img src="Resimler/Anamenü/tekno_bilesen_logo.svg">
        </a>
    </div>
    <div class="account-icon">
        <a href="login.php">
            <img src="Resimler/Anamenü/account_icon.svg">
        </a>
    </div>
</header>

<div class="content-container">
    <div class="main-content">
        <div class="card">
            <div class="card-header">
                <h2 class="card-title">Parça Seçimi</h2>
            </div>
            <div class="card-body">
                <form method="post" action="">
                    <div class="form-group">
                        <label for="processor_choice">İşlemciyi Seçiniz:</label>
                        <select class="form-control" name="processor_choice" id="processor_choice" required>
                            <option value="">Bir seçenek seçin</option>
                            <option value="Intel Core i9-14900 3.20 Ghz">Intel Core i9-14900 3.20 Ghz</option>
                            <option value="AMD Ryzen 9 7950X3D 4.20 Ghz">AMD Ryzen 9 7950X3D 4.20 Ghz</option>
                            <option value="Intel Core i7-14700 3.30 Ghz">Intel Core i7-14700 3.30 Ghz</option>
                            <option value="AMD Ryzen 7 7800X 5.00 Ghz">AMD Ryzen 7 7800X 5.00 Ghz</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="gpu_choice">Anakart Seçiniz:</label>
                        <select class="form-control" name="gpu_choice" id="gpu_choice" required>
                            <option value="">Bir seçenek seçin</option>
                            <option value="ASUS ROG Strix Z790-E">ASUS ROG Strix Z790-E</option>
                            <option value="MSI MAG B650 Tomahawk">MSI MAG B650 Tomahawk</option>
                            <option value="Gigabyte AORUS X670 Elite AX">Gigabyte AORUS X670 Elite AX</option>
                            <option value="ASRock Z790 Taichi">ASRock Z790 Taichi</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">SORGULA</button>
                </form>
            </div>
        </div>
    </div>

    <div class="main-content">
        <div class="card">
            <div class="card-header">
                <h2 class="card-title">Seçimleriniz</h2>
            </div>
            <div class="card-body">
                <?php
                session_start();

                // Define compatible processor and motherboard pairs
                $compatibility = array(
                    "Intel Core i9-14900 3.20 Ghz" => array("ASUS ROG Strix Z790-E", "ASRock Z790 Taichi"),
                    "AMD Ryzen 9 7950X3D 4.20 Ghz" => array("MSI MAG B650 Tomahawk", "Gigabyte AORUS X670 Elite AX"),
                    "Intel Core i7-14700 3.30 Ghz" => array("ASUS ROG Strix Z790-E", "ASRock Z790 Taichi"),
                    "AMD Ryzen 7 7800X 5.00 Ghz" => array("MSI MAG B650 Tomahawk", "Gigabyte AORUS X670 Elite AX")
                );

                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
                    if (isset($_POST['processor_choice']) && isset($_POST['gpu_choice'])) {
                        $_SESSION['processor_choice'] = $_POST['processor_choice'];
                        $_SESSION['gpu_choice'] = $_POST['gpu_choice'];
                    }
                }
                ?>

                <div id="selection_area">
                    <?php
                    if (isset($_SESSION['processor_choice'])) {
                        echo '<div class="alert alert-info">Seçilen İşlemci: ' . $_SESSION['processor_choice'] . '</div>';
                    }
                    if (isset($_SESSION['gpu_choice'])) {
                        echo '<div class="alert alert-info">Seçilen Anakart: ' . $_SESSION['gpu_choice'] . '</div>';
                    }
                    if (isset($_SESSION['processor_choice']) && isset($_SESSION['gpu_choice'])) {
                        $processor = $_SESSION['processor_choice'];
                        $gpu = $_SESSION['gpu_choice'];

                        if (in_array($gpu, $compatibility[$processor])) {
                            echo '<div class="alert alert-success">Uyumludur</div>';
                        } else {
                            echo '<div class="alert alert-danger">Uyumlu Değildir</div>';
                        }
                    }
                    ?>
                </div>

            </div>
        </div>
    </div>
</div>

<footer style="position: fixed; bottom: 0; width: 100%;">
                <div class="footer-content">
                <div class="text-1">teknobileşen.com © 2024</div>  
                <div class="text-2">  
                    <nav>             
                    <ul>
                        <li><a href="blog.html">Blog</a></li> | <li><a href="hakkimizda.html">Hakkımızda</a></li> | <li><a href="iletisim.html">İletişim</a></li>
                    </ul>
                </nav> 
                </div>
                </div>                        
        </footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
