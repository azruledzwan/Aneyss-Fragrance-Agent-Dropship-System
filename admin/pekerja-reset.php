<?php
require('../inc/conn.php');

$idpekerja = $conn->real_escape_string($_GET['idpekerja']);
$sql = "UPDATE pekerja SET katalaluan = nokp WHERE idpekerja = $idpekerja";
$conn->query($sql);
?>
<script>
    alert('Kata laluan asal adalah nombor kad pengenalan')
    window.location='index.php?menu=senaraipekerja'
</script>
