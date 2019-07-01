<?php
require('../inc/conn.php');

$nokp = $_POST['nokp'];

$sql = "SELECT * FROM pelanggan WHERE nokp = '$nokp' AND level ='stokis'";
$result = $conn->query($sql);
if($result->num_rows == 1){
     $row = $result->fetch_assoc();
     if($nokp == $row['nokp'])
    {
     $_SESSION['idpelanggan'] = $row['idpelanggan'];
     header('location: stokis/');
    }
     else
     {
         ?>
         <script>
         alert('Harap maaf! Maklumat ejen tidak wujud');
         window.location='index.php?menu=utama';
         </script>
         <?php
      }
}else{
$sql = "SELECT * FROM pelanggan WHERE nokp = '$nokp' AND level = 'dropship'";
$result = $conn->query($sql);
if($result->num_rows == 1){
        $row = $result->fetch_assoc();
      if($nokp == $row['nokp'])
      {
      $_SESSION['idpelanggan'] = $row['idpelanggan'];
      header('location: dropship/');
      }
      else
      {
          ?>
          <script>
          alert('Harap maaf! Maklumat ejen tidak wujud');
          window.location='index.php?menu=utama';
          </script>
          <?php
        }
}else{
    ?>
    <script>
    alert('Harap maaf! No kad pengenalan tidak sepadan');
    window.location='index.php?menu=utama';
    </script>
    <?php
    }
}
?>
