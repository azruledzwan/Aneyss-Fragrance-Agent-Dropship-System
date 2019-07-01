<?php
require('../inc/conn.php');

$idproduk = $_GET['idproduk'];
$idpelanggan = $_SESSION['idpelanggan'];

$sql = "SELECT * FROM belian WHERE pelanggan = $idpelanggan AND status is null";
$result = $conn->query($sql);
if($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $idbelian = $row['idbelian'];
} else {
    if(isset($_SESSION['idbelian'])) {
        $idbelian = $_SESSION['idbelian'];
    } else {
        $tarikh = date('Y-m-d');
        $sql = "INSERT INTO belian(pelanggan,tarikhbeli) VALUES ($idpelanggan,'$tarikh')";
        $conn->query($sql);
        $idbelian = $conn->insert_id;
    }
}
$_SESSION['idbelian'] = $idbelian;

$sql = "SELECT * FROM detailbelian WHERE belian = $idbelian AND produk = $idproduk";
$result = $conn->query($sql);
if($result->num_rows == 0) {
    $sql = "INSERT INTO detailbelian(belian,produk,kuantiti) VALUES ($idbelian,$idproduk,1)";
    $conn->query($sql);
}

header('location: index.php?menu=bakulbelian');
?>