<?php
require('../inc/conn.php');

$idpakej = $conn->real_escape_string($_GET['idpakej']);
$sql = "DELETE FROM pakej WHERE idpakej = $idpakej";
$conn->query($sql);
header('location: index.php?menu=daftarpakej');
?>