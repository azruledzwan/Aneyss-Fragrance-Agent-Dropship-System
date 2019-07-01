<?php
require('../inc/conn.php');

$idaroma = $conn->real_escape_string($_POST['idaroma']);
$aroma = $conn->real_escape_string($_POST['aroma']);

if($idaroma == 0 )$sql = "INSERT INTO aroma VALUES ('$idaroma' , '$aroma')";
else $sql = "UPDATE aroma SET aroma = '$aroma' WHERE idaroma = $idaroma";
$conn->query($sql);
if($conn->error){
    if($conn->errno == 1062){   # duplicate
        ?>
        <script>
            alert('Harap maaf! Maklumat aroma ini telah wujud');
            window.location='index.php?menu=daftararoma';
        </script>
        <?php
    }else{
        echo $conn->error."<br>".$sql."<br>";
        echo 'Harap maaf! Ada masalah dengan pangkalan data';
    }
}else{
    header('location: index.php?menu=daftararoma');
}
?>