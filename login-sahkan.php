<?php
require('inc/conn.php');

$idpengguna = $conn->real_escape_string($_POST['idpengguna']);
$katalaluan = $_POST['katalaluan'];

if($idpengguna == 'admin')
   {
    $sql = "SELECT * FROM admin";
    $row = $conn->query($sql)->fetch_assoc();
        if($katalaluan == $row['katalaluan'])
        {
        $_SESSION['idpengguna'] = 'admin';
        header('location: admin/');
        }
        else
        {
        ?>
        <script>
            alert('Harap maaf! ID pengguna dan kata laluan tidak sepadan');
            window.location='index.php?menu=login';
        </script>
        <?php
        }
    }
else 
    {
     
    $sql = "SELECT * FROM pekerja WHERE nokp = '$idpengguna'";
    $result = $conn->query($sql);
   if($result->num_rows == 1){
        $row = $result->fetch_assoc();
        if($katalaluan == $row['katalaluan'])
        {
        $_SESSION['idpekerja'] = $row['idpekerja'];
         if ($row ['jawatan'] == 'Pengurus') {
           header('location: pengurus/');
         }else {
          header('location: staff/');
         }
        }
        else
        {
            ?>
            <script>
            alert('Harap maaf! ID pengguna dan kata laluan tidak sepadan');
            window.location='index.php?menu=login';
            </script>
            <?php
           }
        }
        else
        {
         $sql = "SELECT * FROM pelanggan WHERE idpengguna = '$idpengguna'";
         $result = $conn->query($sql);
             if($result->num_rows == 1){
             $row = $result->fetch_assoc();
             if($katalaluan == $row['katalaluan'])
             {
              $_SESSION['idpelanggan'] = $row['idpelanggan'];
              header('location: '.$row['level'].'/');
             }
             else
             {
             ?>
             <script>
             alert('Harap maaf! ID pengguna dan kata laluan tidak sepadan');
             window.location='index.php?menu=login';
             </script>
             <?php
            }
             }
             else
             {
             ?>
             <script>
             alert('Harap maaf! ID pengguna dan kata laluan tidak sepadan');
             window.location='index.php?menu=login';
             </script>
             <?php
            }
        }
    }
             
             
    
?>