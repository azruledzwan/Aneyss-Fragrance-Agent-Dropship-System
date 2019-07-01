<?php
require('../inc/conn.php');

$idaroma = $conn->real_escape_string($_GET['idaroma']);
$sql = "DELETE FROM aroma WHERE idaroma = $idaroma";
$conn->query($sql);
header('location: index.php?menu=daftararoma');
?>