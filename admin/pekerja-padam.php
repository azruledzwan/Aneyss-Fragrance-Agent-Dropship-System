<?php
require('../inc/conn.php');

$idpekerja = $conn->real_escape_string($_GET['idpekerja']);
$sql = "DELETE FROM pekerja WHERE idpekerja = $idpekerja";
$conn->query($sql);
header('location: index.php?menu=senaraipekerja');
?>