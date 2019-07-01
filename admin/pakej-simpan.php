<?php
require('../inc/conn.php');

$idpakej = $conn->real_escape_string($_POST['idpakej']);
$kategori = $conn->real_escape_string($_POST['kategori']);
$harga = $conn->real_escape_string($_POST['harga']);

$fp = fopen($_FILES['image']['tmp_name'],'r');
$gambar = fread($fp,filesize($_FILES['image']['tmp_name']));
$gambar = $conn->real_escape_string($gambar);
fclose($fp);

if ($idpakej == 0) $sql = "INSERT INTO pakej VALUES (null, '$harga', '$kategori', '$gambar')";
else $sql = "UPDATE pakej SET harga = '$harga', kategori = '$kategori' , gambar = '$gambar' WHERE idpakej = $idpakej";
$conn->query($sql);
if($conn->error){
    if($conn->errno == 1062){   # duplicate
        ?>
        <script>
            alert('Harap maaf! Maklumat pakej ini telah wujud');
            window.location='index.php?menu=daftarpakej';
        </script>
        <?php
    }else{
        echo 'Harap maaf! Ada masalah dengan pangkalan data';
    }
}else{
    ?>
        <script>
            alert('Pendaftaran berjaya..');
            window.location='index.php?menu=daftarpakej';
        </script>
        <?php
}
?>