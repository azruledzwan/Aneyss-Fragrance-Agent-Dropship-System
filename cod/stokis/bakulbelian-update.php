<?php
require('../../inc/conn.php');

$kuantiti = $_GET['kuantiti'];
$iddetailbelian= $_GET['iddetailbelian'];

$sql = "UPDATE detailbelian SET kuantiti = $kuantiti WHERE iddetailbelian = $iddetailbelian";
$conn->query($sql);
#echo $conn->error;

header('location: index.php?menu=bakulbelian');
