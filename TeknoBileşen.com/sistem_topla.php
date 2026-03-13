<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Toplama Sihirbazı - TeknoBileşen.com</title>
    <link rel="stylesheet" href="taslak.css">
    <link rel="stylesheet" href="sistem_topla.css">
    <link rel="icon" href="Resimler/favicon/favicon.png" type="image/png">

    <style>
        #save-favorites-button {
            background-color: red;
            color: white;
            border: none;
            padding: 15px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 10px 2px;
            margin-top: 30px;
            cursor: pointer;
            border-radius: 10px;
            transition: background-color 0.3s, transform 0.3s;
        }

        .category-container {
            margin-bottom: 10px;
        }

        .category-title {
            background-color: #f2f2f2;
            padding: 10px;
            cursor: pointer;
        }

        .category-content {
            display: none;
            padding: 10px;
            border: 1px solid #ddd;
            border-top: none;
        }

        .grid-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 10px;
        }

        .grid-item {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
            cursor: pointer;
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

<main class="main-content">
    <div class="left-column">
        <?php
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

            // SQL sorguları
            $sql_anakart = "SELECT Anakart_ID, Marka, Fiyat, resim, satici, satis_URL, urunler_ID FROM anakart";
            $result_anakart = $conn->query($sql_anakart);

            $sql_cpu = "SELECT CPU_ID, Marka, Fiyat, resim, satici, satis_URL, urunler_ID FROM cpu";
            $result_cpu = $conn->query($sql_cpu);

            $sql_gpu = "SELECT GPU_ID, Marka, Fiyat, resim, satici, satis_URL, urunler_ID FROM gpu";
            $result_gpu = $conn->query($sql_gpu);

            $sql_hdd = "SELECT HDD_ID, Marka, Fiyat, resim, satici, satis_URL, urunler_ID FROM hdd";
            $result_hdd = $conn->query($sql_hdd);

            $sql_kasa = "SELECT Kasa_ID, Marka, Fiyat, resim, satici, satis_URL, urunler_ID FROM kasa";
            $result_kasa = $conn->query($sql_kasa);

            $sql_powersupply = "SELECT PowerSupply_ID, Marka, Fiyat, resim, satici, satis_URL, urunler_ID FROM powersupply";
            $result_powersupply = $conn->query($sql_powersupply);

            $sql_ram = "SELECT RAM_ID, Marka, Fiyat, resim, satici, satis_URL, urunler_ID FROM ram";
            $result_ram = $conn->query($sql_ram);

            $sql_sogutma = "SELECT sogutma_ID, Marka, Fiyat, resim, satici, satis_URL, urunler_ID FROM sogutma";
            $result_sogutma = $conn->query($sql_sogutma);

            $sql_ssd = "SELECT SSD_ID, Marka, Fiyat, resim, satici, satis_URL, urunler_ID FROM ssd";
            $result_ssd = $conn->query($sql_ssd);

            $listeler = array(
                "Anakart" => $result_anakart,
                "İşlemci" => $result_cpu,
                "GPU" => $result_gpu,
                "HDD" => $result_hdd,
                "Kasa" => $result_kasa,
                "Power Supply" => $result_powersupply,
                "RAM" => $result_ram,
                "Soğutma" => $result_sogutma,
                "SSD" => $result_ssd
            );

            foreach ($listeler as $kategori => $result) {
                echo "<div class='category-container'>";
                echo "<h2 class='category-title'>$kategori</h2>";
                echo "<div class='category-content'>";
                echo "<div class='grid-container'>";
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<div class='grid-item' data-id='{$row['urunler_ID']}' data-marka='{$row['Marka']}' data-fiyat='{$row['Fiyat']}' data-resim='{$row['resim']}' data-satici='{$row['satici']}' data-url='{$row['satis_URL']}' data-kategori='$kategori'>";
                        echo "<img src='{$row['resim']}' alt='{$row['Marka']}'>";
                        echo "<h3>{$row['Marka']}</h3>";
                        echo "<p>Fiyat: {$row['Fiyat']} TL</p>";
                        echo "<p>Satıcı: {$row['satici']}</p>";
                        echo "</div>";
                    }
                } else {
                    echo "<p>Bu kategoride ürün bulunmamaktadır.</p>";
                }
                echo "</div>";
                echo "</div>";
                echo "</div>";
            }

            $conn->close();
        ?>
    </div>
    <div class="right-column">
        <div class="selected-products">
            <h2>Seçilen Ürünler</h2>
        </div>
        <div class="total-price">
            <br></br>
            <h3>Toplam Fiyat: <span id="total-price">0</span> ₺</h3>
        </div>
        <button id="save-favorites-button">Favorilere Kaydet</button>
    </div>
</main>

<script>
    // Seçilen ürünlerin ID'lerini ve toplam fiyatı depolamak için değişkenler oluşturalım
    const selectedProductIds = [];
    const selectedCategories = new Map(); // Kategori ve ilgili ürünü depolamak için bir harita kullan
    let totalPrice = 0;

    // Toplam fiyatı güncelleyen fonksiyon
    function updateTotalPrice() {
        document.getElementById('total-price').innerText = totalPrice.toFixed(2);
    }

    // Kategori başlıklarına tıklama olayları ekleyelim
    document.querySelectorAll('.category-title').forEach((title, index, titles) => {
        title.addEventListener('click', function() {
            // Tüm kategori içeriklerini kapatalım
            document.querySelectorAll('.category-content').forEach(content => content.style.display = 'none');

            // Seçilen kategori içeriğini açalım
            this.nextElementSibling.style.display = 'block';
        });
    });

    // İlk kategori içeriğini açık yapalım
    document.querySelector('.category-content').style.display = 'block';

    document.querySelectorAll('.grid-item').forEach(item => {
        item.addEventListener('click', function() {
            const selectedProducts = document.querySelector('.selected-products');
            const productId = this.getAttribute('data-id');
            const productImage = this.getAttribute('data-resim');
            const productMarka = this.getAttribute('data-marka');
            const productFiyat = parseFloat(this.getAttribute('data-fiyat'));
            const productSatici = this.getAttribute('data-satici');
            const productUrl = this.getAttribute('data-url');
            const productKategori = this.getAttribute('data-kategori');

            // Kategoriden zaten bir ürün seçildiyse eski ürünü çıkar ve yeni ürünü ekle
            if (selectedCategories.has(productKategori)) {
                const existingProduct = selectedCategories.get(productKategori);
                const existingProductFiyat = parseFloat(existingProduct.getAttribute('data-fiyat'));
                totalPrice -= existingProductFiyat;
                existingProduct.remove();
                selectedProductIds.splice(selectedProductIds.indexOf(existingProduct.getAttribute('data-id')), 1);
                selectedCategories.delete(productKategori);
            }

            const productHTML = `
                <div class='grid-item' data-id='${productId}' data-marka='${productMarka}' data-fiyat='${productFiyat}' data-resim='${productImage}' data-satici='${productSatici}' data-url='${productUrl}' data-kategori='${productKategori}'>
                    <img src='${productImage}' alt='${productMarka}'>
                    <h3>${productMarka}</h3>
                    <p>Fiyat: ${productFiyat} TL</p>
                    <p>Satıcı: ${productSatici}</p>
                </div>
            `;

            // Seçilen ürünün ID'sini diziye ve kategorisini haritaya ekleyelim, toplam fiyatı güncelleyelim
            selectedProducts.insertAdjacentHTML('beforeend', productHTML);
            selectedProductIds.push(productId);
            selectedCategories.set(productKategori, document.querySelector(`.selected-products .grid-item[data-id='${productId}']`));
            totalPrice += productFiyat;
            updateTotalPrice();

            // Seçim yapıldıktan sonra bu kategoriyi kapatıp bir sonrakini açalım
            const currentCategory = this.closest('.category-container');
            const nextCategory = currentCategory.nextElementSibling;
            currentCategory.querySelector('.category-content').style.display = 'none';
            if (nextCategory) {
                nextCategory.querySelector('.category-content').style.display = 'block';
            }
        });
    });

    // Silme işlemi için sağdaki ürün konteynerına tıklandığında gerçekleşsin
    document.querySelector('.selected-products').addEventListener('click', function(event) {
        if (event.target.closest('.grid-item')) {
            const product = event.target.closest('.grid-item');
            const productIdToRemove = product.getAttribute('data-id');
            const productKategori = product.getAttribute('data-kategori');
            const productFiyat = parseFloat(product.getAttribute('data-fiyat'));
            product.remove(); // Ürünü listeden kaldır

            // Seçilen ürünler dizisinden ID'yi çıkar, kategoriyi haritadan çıkar ve toplam fiyatı güncelle
            const indexToRemove = selectedProductIds.indexOf(productIdToRemove);
            if (indexToRemove !== -1) {
                selectedProductIds.splice(indexToRemove, 1);
                selectedCategories.delete(productKategori);
                totalPrice -= productFiyat;
                updateTotalPrice();
            }
        }
    });

    document.getElementById('save-favorites-button').addEventListener('click', function() {
        const form = document.createElement('form');
        form.method = 'POST';
        form.action = 'save_favorites.php';

        selectedProductIds.forEach((id, index) => {
            const input = document.createElement('input');
            input.type = 'hidden';
            input.name = `hardware${index + 1}_ID`;
            input.value = id;
            form.appendChild(input);
        });

        document.body.appendChild(form);
        form.submit();
    });

</script>

<footer>
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

</body>
</html>
