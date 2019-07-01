<?php
require('../inc/conn.php');

$idpekerja = $conn->real_escape_string($_POST['idpekerja']);
$nama = $conn->real_escape_string($_POST['namapekerja']);
$nokp = $conn->real_escape_string($_POST['nokppekerja']);
$jawatan = $conn->real_escape_string($_POST['jawatan']);
$nama = strtoupper($nama);

if($idpekerja == 0 )$sql = "INSERT INTO pekerja VALUES ('$idpekerja' , '$nama' , '$nokp'  , '$nokp' , '$jawatan')";
else $sql = "UPDATE pekerja SET nama = '$nama', nokp = '$nokp', jawatan = '$jawatan' WHERE idpekerja = $idpekerja";
$conn->query($sql);
if($conn->error){
    if($conn->errno == 1062){   # duplicate
        ?>
        <script>
            alert('Harap maaf! Maklumat pekerja ini telah wujud');
            window.location='index.php?menu=daftarpekerja';
        </script>
        <?php
    }else{
        echo $conn->error."<br>".$sql."<br>";
        echo 'Harap maaf! Ada masalah dengan pangkalan data';
    }
}else{
    ?>
        <script>
            alert('Maklumat telah direkod');
            window.location='index.php?menu=senaraipekerja';
        </script>
        <?php
}
?>
