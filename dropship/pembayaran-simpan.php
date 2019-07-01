<?php
require('../inc/conn.php');

$idbelian = $conn->real_escape_string($_POST['idbelian']);
$status = $conn->real_escape_string($_POST['status']);

$fp = fopen($_FILES['image']['tmp_name'],'r');
$resit = fread($fp,filesize($_FILES['image']['tmp_name']));
$resit = $conn->real_escape_string($resit);
fclose($fp);


$sql = "UPDATE belian SET status = '$status', resit = '$resit'  WHERE idbelian = '$idbelian'";
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
        unset($_SESSION['idbelian']);

        $sql = "SELECT * FROM detailbelian WHERE belian = $idbelian";
        $result = $conn->query($sql);
        echo $conn->error;
        while($row = $result->fetch_assoc()){
            $kuantiti = $row['kuantiti'];
            $idproduk  = $row['produk'];
            $sql = "UPDATE produk SET stokpelanggan = stokpelanggan - $kuantiti WHERE idproduk = $idproduk";
            $conn->query($sql);
        }
        ?>
        <script>
            alert('Pembelian anda telah direkod. Terima kasih :)');
            window.location='index.php?menu=utama';
        </script>
        <?php
}
?>
