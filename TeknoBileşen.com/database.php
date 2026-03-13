<link rel="icon" href="Resimler\favicon\favicon.png" type="image/png">
<?php

$hostName = "185.243.181.127";
$dbUser = "teknobil_esen";
$dbPassword = "teknobilesen734";
$dbName = "teknobil_sat_veri";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
if (!$conn) {
    die("Bir şeyler ters gitti.");
}

?>