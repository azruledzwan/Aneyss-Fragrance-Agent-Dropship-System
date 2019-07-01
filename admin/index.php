<?php require('../inc/conn.php');
if(!isset($_SESSION['idpengguna'])) header('location: ../logout.php');
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
			<script src="../inc/produk.js"></script>
			<script src="../inc/search.js"></script>
			<script src="../inc/upload.js"></script>
			<script src="../inc/pekerja.js"></script>
		</head>

		<body>
			<div class="wrap-content">
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-right">
							<p style="float: left">Log Masuk Sebagai<strong> Pentadbir</strong></p>
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
											<li class="dropdown" >
												<a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>MAKLUMAT PEKERJA </b><b class="caret"></b></a>
												<ul class="dropdown-menu">
													<li ><a href="index.php?menu=daftarpekerja" ><b>DAFTAR PEKERJA</b></a></li>
													<li ><a href="index.php?menu=senaraipekerja" ><b>SENARAI PEKERJA</b></a></li>
												</ul>
											</li>
											<li class="dropdown" >
												<a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>MAKLUMAT PRODUK </b><b class="caret"></b></a>
												<ul class="dropdown-menu">
													<li ><a href="index.php?menu=daftarproduk" ><b>DAFTAR PRODUK</b></a></li>
													<li ><a href="index.php?menu=senaraiproduk" ><b>SENARAI PRODUK</b></a></li>
													<li class="divider"></li>
													<li ><a href="index.php?menu=daftararoma" ><b>TAMBAH AROMA</b></a></li>
												</ul>
											</li>
											<li ><a href="index.php?menu=daftarpakej" ><b>DAFTAR PAKEJ</b></a></li>
											<li ><a href="../logout.php"  onclick="return confirm('Adakah anda pasti untuk log keluar?');"><b>LOG KELUAR</b></a></li>
										</ul>
									</div>
							</nav>
						</div>
					</div>
					<div class="row">
							<div class="col-md-12">
									<div class="input-group">
										<input class="form-control" id="system-search" placeholder="Carian" required>
										<span class="input-group-btn">
											<button type="search" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
										</span>
									</div>
							</div>
					</div><br>

					<div class="row">
							<div class="col-md-12">
								<div style="min-height: 510px">
									<?php
									if(isset($_GET['menu'])){
									$menu = $conn->real_escape_string($_GET['menu']);
									}else{
									$menu = 'utama';
									}
									require("$menu.php");
									?>
								</div>
							</div>
					</div>

					<div class="row" >
						<div class="col-md-12" >
							<div class="copyright" style="text-align: center">
								Copyright &copy; <?php echo date('Y'); ?> Aneyss Fragrance. All rights reserved.
							</div>
						</div>
					</div>
				</div>
			</div>
		</body>

	</html>
