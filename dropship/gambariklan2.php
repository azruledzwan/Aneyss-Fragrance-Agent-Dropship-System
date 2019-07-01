<?php
require('../inc/conn.php');
$idiklan = $_GET['idiklan'];
$sql = "SELECT * FROM iklan WHERE idiklan = $idiklan";
$row = $conn->query($sql)->fetch_assoc();
header("ContentType: image/jpeg");
echo $row['gambar2'];
?>