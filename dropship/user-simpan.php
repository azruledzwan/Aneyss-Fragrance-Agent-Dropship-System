<?php
require('../inc/conn.php');

$idpelanggan = $conn->real_escape_string($_POST['idpelanggan']);
$nama = $conn->real_escape_string($_POST['nama']);
$notelefon = $conn->real_escape_string($_POST['notelefon']);
$alamat = $conn->real_escape_string($_POST['alamat']);
$bandar = $conn->real_escape_string($_POST['bandar']);
$negeri = $conn->real_escape_string($_POST['negeri']);
$poskod = $conn->real_escape_string($_POST['poskod']);

$nama = strtoupper($nama);

$sql = "UPDATE pelanggan SET  nama = '$nama', notelefon = '$notelefon', alamat = '$alamat' , bandar = '$bandar' , negeri = '$negeri' , poskod = '$poskod' WHERE idpelanggan = $idpelanggan";
$conn->query($sql);
if($conn->error){
    if($conn->errno == 1062){   # duplicate
        ?>
        <script>
            alert('Harap maaf! Maklumat ini telah wujud');
            window.location='index.php?menu=daftaruser';
        </script>
        <?php
    }else{
        echo $conn->error."<br>".$sql."<br>";
        echo 'Harap maaf! Ada masalah dengan pangkalan data';
    }
}else{
        header('location: index.php?menu=pembayaran');
}
?>