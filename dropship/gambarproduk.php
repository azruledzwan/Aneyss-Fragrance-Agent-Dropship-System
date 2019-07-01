<?php
require('../inc/conn.php');
$idproduk = $_GET['idproduk'];
$sql = "SELECT * FROM produk WHERE idproduk = $idproduk";
$row = $conn->query($sql)->fetch_assoc();
header("ContentType: image/jpeg");
echo $row['gambar'];
?>