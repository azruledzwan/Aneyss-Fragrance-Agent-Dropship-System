<?php
require('../../inc/conn.php');

$idpelanggan = $_SESSION['idpelanggan'];
$idbelian = $_SESSION['idbelian'];
//echo '<pre>',print_r($_SESSION); exit;

$sql = "UPDATE belian SET status = 'COD', trackingnumber = 'tiada' WHERE idbelian = '$idbelian'";
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
    //unset($_SESSION['idbelian']);
        header('location: invois.php');
}
?>
