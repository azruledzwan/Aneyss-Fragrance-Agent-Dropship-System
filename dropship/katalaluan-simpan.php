 <?php
require('../inc/conn.php');

$idpelanggan = $_SESSION['idpelanggan'];
$katalaluanasal = $conn->real_escape_string($_POST['katalaluanasal']);
$katalaluanbaru = $conn->real_escape_string($_POST['katalaluanbaru']);

$sql = "SELECT * FROM pelanggan WHERE idpelanggan = $idpelanggan";
$row = $conn->query($sql)->fetch_assoc();
if($row['katalaluan'] == $katalaluanasal){
    $sql = "UPDATE pelanggan SET katalaluan = '$katalaluanbaru' WHERE idpelanggan = $idpelanggan";
    $conn->query($sql);
    ?>
    <script>
        alert('Kata laluan baru telah berjaya disimpan')
        window.location='index.php?menu=tukarkatalaluan'
    </script>
    <?php
}else{
    ?>
    <script>
        alert('Harap maaf! Kata laluan asal salah')
        window.location='index.php?menu=tukarkatalaluan'
    </script>
    <?php
}
?>