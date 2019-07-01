<?php
require('../inc/conn.php');

$idproduk = $conn->real_escape_string($_POST['idproduk']);
$namaproduk = $conn->real_escape_string($_POST['namaproduk']);
$isipadu = $conn->real_escape_string($_POST['isipadu']);
$kategori = $conn->real_escape_string($_POST['kategori']);
$stokpelanggan = $conn->real_escape_string($_POST['stokpelanggan']);
$stokdropship = $conn->real_escape_string($_POST['stokdropship']);
$stokstokis = $conn->real_escape_string($_POST['stokstokis']);
$aroma1 = $conn->real_escape_string($_POST['aroma1']);
$aroma2 = $conn->real_escape_string($_POST['aroma2']);
$aroma3 = $conn->real_escape_string($_POST['aroma3']);
$aroma4 = $conn->real_escape_string($_POST['aroma4']);
$aroma5 = $conn->real_escape_string($_POST['aroma5']);
$aroma6 = $conn->real_escape_string($_POST['aroma6']);

$fp = fopen($_FILES['image']['tmp_name'],'r');
$gambar = fread($fp,filesize($_FILES['image']['tmp_name']));
$gambar = $conn->real_escape_string($gambar);
fclose($fp);

$namaproduk = strtoupper($namaproduk);

if($idproduk == 0) $sql = "INSERT INTO produk VALUES (null, '$namaproduk', '$isipadu' , '$kategori', '$gambar', '$stokpelanggan' , '$stokdropship' , '$stokstokis' , '$aroma1' , '$aroma2', '$aroma3' , '$aroma4' , '$aroma5' , '$aroma6')";
else $sql = "UPDATE produk SET namaproduk = '$namaproduk' , isipadu = '$isipadu' , kategori = '$kategori' , gambar = '$gambar' , aroma1 = '$aroma1' , aroma2 = '$aroma2' ,
aroma3 = '$aroma3' , aroma4 = '$aroma4' , aroma5 = '$aroma5' , aroma6 = '$aroma6' WHERE idproduk = $idproduk";
$conn->query($sql);
if($conn->error){
    if($conn->errno == 1062){   # duplicate
        ?>
        <script>
            alert('Harap maaf! Maklumat produk ini telah wujud');
            window.location='index.php?menu=daftarproduk';
        </script>
        <?php
    }else{
         echo $conn->error."<br>".$sql."<br>";
        echo 'Harap maaf! Ada masalah dengan pangkalan data';
    }
}else{
    ?>
    <script>
        alert('Pendaftaran produk berjaya..');
        window.location='index.php?menu=senaraiproduk';
    </script>
    <?php
}
?>