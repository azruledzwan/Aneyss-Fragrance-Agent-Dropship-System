<?php require('../inc/conn.php');
if(!isset($_SESSION['idpelanggan'])) header('location: ../logout.php');
$idpelanggan = $_SESSION['idpelanggan'];
$sql = "SELECT * FROM pelanggan WHERE idpelanggan = $idpelanggan";
$row = $conn->query($sql)->fetch_assoc();
$nama = $row['nama'];
$status = $row['status'];
if(isset($_POST['carian'])){
  $carian = $_POST['carian'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Aneyss Fragrance</title>
  <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../inc/bootstrap-3.3.7-dist/css/bootstrap.min.css" media="screen">
	<script src="../inc/jquery-1.12.1.min.js"></script>
	<script src="../inc/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
	<script src="../inc/search.js"></script>
</head>
<body>
	<div class="wrap-content">
		<div class="container">
			<div class="row">
							<div class="col-md-12 text-right">
								<p style="float: left">Selamat Datang! DROPSHIP <strong><?php echo $nama; ?></strong></p>
							</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<nav class="navbar navbar-inverse">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
								<a class="navbar-brand" href="index.php?menu=utama"><img src="../img/logo.png" style="width: 80px;height: 40px;margin-top: -10px; margin-bottom: -10px"></a>
							</div>
							<div class="collapse navbar-collapse" id="myNavbar">
								<ul class="nav navbar-nav navbar-right">
									<li ><a href="index.php?menu=utama" ><b>UTAMA</b></a></li>
									<li ><a href="index.php?menu=maklumatkami" ><b>MAKLUMAT KAMI</b></a></li>
									<li class="dropdown" >
										<a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>KATEGORI </b><b class="caret"></b></a>
										<ul class="dropdown-menu">
											<li ><a href="index.php?menu=lelaki" >LELAKI</a></li>
											<li class="divider"></li>
											<li ><a href="index.php?menu=perempuan" >PEREMPUAN</a></li>
										</ul>
									</li>
									<li class="dropdown" >
										<a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>AKAUN </b><b class="caret"></b></a>
										<ul class="dropdown-menu">
											<li ><a href="index.php?menu=tukarkatalaluan" >TUKAR KATALALUAN</a></li>
											<li ><li ><a href="../logout.php" onclick="return confirm('Adakah anda pasti untuk log keluar?');"  ><b>LOG KELUAR</b></a></li></li>
										</ul>
									</li>
							</div>
					</nav>
				</div>
			</div>
				<div class="row">
				<div class="col-md-3">
          <form method="post" action="index.php?menu=utama">
            <div class="input-group">
              <input class="form-control" id="system-search" name="carian" placeholder="Carian" required>
              <span class="input-group-btn">
                <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
              </span>
            </form>
            </div><span class="help-block" style="color: red">*Carian berdasarkan aroma</span>

                <button onclick="window.location='index.php?menu=bakulbelian';" type="button" class="btn btn-warning btn-sm btn-block" style="height: 40px">
                  <span class="glyphicon glyphicon-shopping-cart"></span><b> Bakul belian</b>
                </button><br>

                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <span class="glyphicon glyphicon-user"></span> <b>Profil</b>
                    </div>
                      <div class="panel-body text-center" style="font-size:10px">
                              <p>
                              Log Masuk Sebagai<br><b><?php echo $nama; ?></b>
                            </p>
                            <a href="index.php?menu=pembelian" type="button" class="btn btn-info btn-block">PEMBELIAN SAYA</a>
                            <br>
                            <a href="index.php?menu=grafejen" type="button" class="btn btn-danger btn-block">LAPORAN JUALAN</a>
                            <br>
                            <a href="index.php?menu=kad" type="button" class="btn btn-warning btn-block">KAD AHLI</a>
                            </td>
                      </div>
                </div>

                <div class="panel panel-default text-center">
                  <div class="panel-heading">
                    <b>Ikuti kami!</b>
                  </div>
                  <div class="panel-body">
                    <a href="https://www.facebook.com/aneyssfragrance"><img src="../img/fb.png" style="width: 40px;height: 40px" title="aneyssfragrance"></a>
                    <a href="https://www.instagram.com/feezaahijab"><img src="../img/ig.png" style="width: 40px;height: 40px" title="feezaahijab"></a>
                  </div>
                </div>
				</div>

				<div class="col-md-9">
					<div style="min-height: 510px">
						<?php
						if(isset($_GET['menu'])){
						$menu = $conn->real_escape_string($_GET['menu']);
						}else{
						$menu = 'utama';
						}
            if($status == 'baru') $menu = 'pembayaranejen';
            if($status == 'tidaksah') $menu = 'notis';
						require("$menu.php");
						?>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<div class="copyright" style="text-align: center">
						Copyright &copy; <?php echo date('Y'); ?> Aneyss Fragrance. All rights reserved.
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>

<script>
$(function() {
  $('.pop').on('click', function() {
    $('.imagepreview').attr('src', $(this).find('img').attr('src'));
    $('#imagemodal').modal('show');
  });
});
</script>

<div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" data-dismiss="modal">
    <div class="modal-content"  >
      <div class="modal-body">
      <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
      <img src="" class="imagepreview" style="width: 100%;">
      </div>
    </div>
  </div>
</div>
