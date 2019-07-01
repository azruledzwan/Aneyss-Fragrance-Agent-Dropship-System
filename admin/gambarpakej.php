<?php
require('../inc/conn.php');
$idpakej = $_GET['idpakej'];
$sql = "SELECT * FROM pakej WHERE idpakej = $idpakej";
$row = $conn->query($sql)->fetch_assoc();
header("Content-Type: image/jpeg");
echo $row['gambar'];
#printf("<img src=\"data:image/jpeg;base64,%s\" />",base64_encode($row['gambar']));
//echo '<img src="data:image/jpeg;base64,'.base64_encode($image).'"/>';
?>