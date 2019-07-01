<?php
require('../inc/conn.php');

$kuantiti = $_GET['kuantiti'];
$iddetailbelian= $_GET['iddetailbelian'];

$sql ="SELECT * FROM detailbelian
      JOIN produk ON detailbelian.produk = produk.idproduk
      WHERE iddetailbelian = $iddetailbelian";
$row = $conn->query($sql)->fetch_assoc();
$stokdropship = $row['stokdropship'];

$sql = "UPDATE detailbelian SET kuantiti = $kuantiti WHERE iddetailbelian = $iddetailbelian";
$conn->query($sql);
#echo $conn->error;

header('location: index.php?menu=bakulbelian');
