<?php
require('../inc/conn.php');

$idpelanggan = $conn->real_escape_string($_POST['idpelanggan']);
$status = $conn->real_escape_string($_POST['status']);

$fp = fopen($_FILES['image']['tmp_name'],'r');
$resit = fread($fp,filesize($_FILES['image']['tmp_name']));
$resit = $conn->real_escape_string($resit);
fclose($fp);

$sql = "UPDATE pelanggan SET status = '$status', resit = '$resit'  WHERE idpelanggan = '$idpelanggan'";
$conn->query($sql);
if($conn->error){
    if($conn->errno == 1062){   # duplicate
        ?>
        <script>
            alert('Harap maaf! resit pekerja ini telah wujud');
            window.location='index.php?menu=pembayaran';
        </script>
        <?php
    }else{
        echo $conn->error."<br>".$sql."<br>";
        echo 'Harap maaf! Ada masalah dengan pangkalan data';
    }
}else{
        ?>
        <script>
            alert('Resit anda telah direkod. Sila tunggu pengesahan dari staf kami. Terima kasih :)');
            window.location='index.php?menu=utama';
        </script>
        <?php
}
?>
