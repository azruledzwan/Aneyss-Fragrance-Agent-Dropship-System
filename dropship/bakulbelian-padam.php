<?php
require('../inc/conn.php');

$iddetailbelian = $_GET['iddetailbelian'];

$sql = "DELETE FROM detailbelian WHERE iddetailbelian = $iddetailbelian";
$conn->query($sql);

header('location: index.php?menu=bakulbelian');