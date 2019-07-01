<?php
require('../inc/conn.php');

$idproduk = $conn->real_escape_string($_GET['idproduk']);
$sql = "DELETE FROM produk WHERE idproduk = $idproduk";
$conn->query($sql);
header('location: index.php?menu=senaraiproduk');
?>