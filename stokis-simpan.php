<?php
require('inc/conn.php');

$idpakej = $conn->real_escape_string($_POST['idpakej']);
$idpengguna = $conn->real_escape_string($_POST['idpengguna']);
$katalaluan = $conn->real_escape_string($_POST['katalaluan']);
$nama = $conn->real_escape_string($_POST['nama']);
$nokp = $conn->real_escape_string($_POST['nokp']);
$emel = $conn->real_escape_string($_POST['emel']);
$notelefon = $conn->real_escape_string($_POST['notelefon']);
$alamat = $conn->real_escape_string($_POST['alamat']);
$bandar = $conn->real_escape_string($_POST['bandar']);
$negeri = $conn->real_escape_string($_POST['negeri']);
$poskod = $conn->real_escape_string($_POST['poskod']);
$jantina = $conn->real_escape_string($_POST['jantina']);
$level = $conn->real_escape_string($_POST['level']);
$status = $conn->real_escape_string($_POST['status']);
$pakej = $conn->real_escape_string($_POST['pakej']);
$resit = $conn->real_escape_string($_POST['resit']);

$captcha = $conn->real_escape_string($_POST['captcha']);
$captcha2 = $_SESSION['securimage_code_disp']['default'];
if ($captcha != $captcha2){
    ?>
    <script>
        alert ('Harap Maaf! Captcha code tidak sepadan');
        window.location='index.php?menu=pakejstokis';
    </script>
    <?php
} else {


    $nama = strtoupper($nama);

    $sql = "INSERT INTO pelanggan VALUES (null , '$idpengguna' , '$katalaluan', '$nama' , '$nokp', '$emel', '$notelefon', '$alamat' , '$bandar' , '$negeri' , '$poskod' , '$jantina' , '$level' , '$status' , '$pakej' , null)";
    //$sql = "UPDATE pelanggan SET  idpengguna = '$idpengguna',  katalaluan = '$katalaluan', nama = '$nama', emel = '$emel' , notelefon = '$notelefon', alamat = $alamat ,
    //bandar = '$bandar' , negeri = '$negeri' , poskod = '$poskod' , jantina = '$jantina' , level = '$level' , status = '$status' WHERE idpelanggan = $idpelanggan";
    $conn->query($sql);
    if($conn->error){
        if($conn->errno == 1062){   # duplicate
            ?>
            <script>
                alert('Harap maaf! Maklumat ini telah wujud');
                window.location='index.php?menu=pakejstokis';
            </script>
            <?php
        }else{
            echo $conn->error."<br>".$sql."<br>";
            echo 'Harap maaf! Ada masalah dengan pangkalan data';
        }
    }else{
            ?>
            <script>
                alert('Pendaftaran Berjaya.');
                window.location='index.php?menu=login';
            </script>
            <?php
    }
}
?>
