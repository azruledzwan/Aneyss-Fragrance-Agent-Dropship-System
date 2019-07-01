<?php
require('../../inc/conn.php');

$idpelanggan = $_SESSION['idpelanggan'];
$idbelian = $_SESSION['idbelian'];
//echo '<pre>',print_r($_SESSION); exit;
unset($_SESSION['idbelian']);
        ?>
        <script>
            alert('Pembelian anda telah direkod. Terima kasih :)');
            window.location='index.php?menu=bakulbelian';
        </script>
        <?php
?>
