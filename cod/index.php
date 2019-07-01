<?php
require('../inc/conn.php');

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
							<div class="col-md-12 text-left">
								<b>Log Masuk Sebagai..</b>
							</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<nav class="navbar navbar-inverse">
							<div class="navbar-header">
								<a type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</a>
								<a class="navbar-brand" href="index.php?menu=utama"><img src="../img/logo.png" style="width: 80px;height: 40px;margin-top: -10px; margin-bottom: -10px"></a>
							</div>
							<div class="collapse navbar-collapse" id="myNavbar">
								<ul class="nav navbar-nav navbar-right">
									<li ><a href="index.php?menu=utama" ><b>UTAMA</b></a></li>
                  <li ><a href="../index.php" ><b>KEMBALI KE LAMAN WEB</b></a></li>
								</ul>
							</div>
					</nav>
				</div>
			</div>
			<div class="row">
        <div class="col-md-12">
            <div class="panel panel-default text-center" style="min-height: 500px">
              <div class="panel-heading">
                <b>LOG MASUK</b>
              </div>
              <div class="panel-body">
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
