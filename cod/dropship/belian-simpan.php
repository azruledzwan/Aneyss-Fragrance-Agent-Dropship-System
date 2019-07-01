<?php
require('../../inc/conn.php');

$idproduk = $_GET['idproduk'];
$idpelanggan = $_SESSION['idpelanggan'];
//unset($_SESSION['idbelian']);
//echo '<pre>',print_r($_SESSION); exit;
//echo '<pre>'.print_r($val); exit;
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
        $sql = "INSERT INTO belian(pelanggan,tarikhbeli,status) VALUES ($idpelanggan,'$tarikh','COD')";
        $conn->query($sql);
        $idbelian = $conn->insert_id;
      }
}
$_SESSION['idbelian'] = $idbelian;
//echo '<pre>',print_r($_SESSION); exit;
$sql = "SELECT * FROM detailbelian WHERE belian = $idbelian AND produk = $idproduk";
$result = $conn->query($sql);
if($result->num_rows == 0) {
    $sql = "INSERT INTO detailbelian(belian,produk,kuantiti) VALUES ($idbelian,$idproduk,1)";
    $conn->query($sql);
}

header('location: index.php?menu=bakulbelian');
?>
