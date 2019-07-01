	<div class="row">
		<div class="col-md-12">
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
					<?php
					if(isset($carian)){
						$sql = "SELECT * FROM produk WHERE isipadu = '30ml' AND isipadu = '5ml' (namaproduk LIKE '%$carian%' OR aroma1 LIKE '%$carian%' OR aroma2 LIKE '%$carian%' OR aroma3 LIKE '%$carian%' OR aroma4 LIKE '%$carian%' OR aroma5 LIKE '%$carian%' OR aroma6 LIKE '%$carian%')";
					}else{
						?>
				<ol class="carousel-indicators">
					 <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					 <li data-target="#carousel-example-generic" data-slide-to="1"></li>
					 <li data-target="#carousel-example-generic" data-slide-to="2"></li>
					 <li data-target="#carousel-example-generic" data-slide-to="3"></li>
					 <li data-target="#carousel-example-generic" data-slide-to="4"></li>
				</ol>
				<div class="carousel-inner" style="border-radius: 5px">
					<?php
					$bil = 1;
					$sql = "SELECT * FROM iklan";
					$result = $conn->query($sql);
					while($row = $result->fetch_assoc()){
						?>
						<div class="item active">
							<img src="gambariklan1.php?idiklan=<?php echo $row['idiklan']; ?>" alt="" style="height: 400px; width: 1200px">
						</div>
						<div class="item">
							<img src="gambariklan2.php?idiklan=<?php echo $row['idiklan']; ?>" alt="" style="height: 400px; width: 1200px">
						</div>
						<div class="item">
							<img src="gambariklan3.php?idiklan=<?php echo $row['idiklan']; ?>" alt="" style="height: 400px; width: 1200px">
						</div>
						<div class="item">
							<img src="gambariklan4.php?idiklan=<?php echo $row['idiklan']; ?>" alt="" style="height: 400px; width: 1200px">
						</div>
						<div class="item">
							<img src="gambariklan5.php?idiklan=<?php echo $row['idiklan']; ?>" alt="" style="height: 400px; width: 1200px">
						</div>
						<?php
					}
						 ?>
					</div>
					<?php
						}
						?>
				</div>
		 </div>
	</div><br>

	<div class="row">
		<?php
		$sql = "SELECT * FROM harga";
		$rowharga=$conn->query($sql)->fetch_assoc();
		$bil = 1;
		if(isset($carian)){
			$sql = "SELECT * FROM produk WHERE isipadu = '30ml' AND (namaproduk LIKE '%$carian%' OR aroma1 LIKE '%$carian%' OR aroma2 LIKE '%$carian%' OR aroma3 LIKE '%$carian%' OR aroma4 LIKE '%$carian%' OR aroma5 LIKE '%$carian%' OR aroma6 LIKE '%$carian%')";
		}else{
			$sql = "SELECT * FROM produk WHERE isipadu = '30ml'";
		}
		$result = $conn->query($sql);
		while($row = $result->fetch_assoc()){
			?>
		<div class="col-md-4 text-center table-list-search">
			<div class="thumbnail">
				<a href="#" class="pop">
					<img src="gambarproduk.php?idproduk=<?php echo $row['idproduk']; ?>" alt="" style="width: 300px;height: 180px; border-radius: 4px" >
				</a>
				<div class="caption">
					<h5><b style="color: purple"><?php echo $row['namaproduk']; ?></b></h5>
					<h5><b>RM <?php echo $rowharga['pelanggan30ml']; ?></b></h5>
					<h6><?php echo $row['aroma1']; ?>,<?php echo $row['aroma2']; ?>,<?php echo $row['aroma3']; ?>,<?php echo $row['aroma4']; ?>,<?php echo $row['aroma5']; ?>,<?php echo $row['aroma6']; ?></h6><br>
						<?php
					if($row['stokpelanggan'] > 0) {
					?>
						<a href="index.php?menu=login" class="btn btn-warning btn-block"><span class="glyphicon glyphicon-shopping-cart"></span> Add to cart</a>
					<?php
					} else {
						?>
					<a href="#" class="btn btn-danger btn-block disabled" >Out of stock</a>
					<?php
					}
					?>
					</p>
				</div>
			</div>
		</div>
		<?php
			}
			?>

		<?php
		$sql = "SELECT * FROM harga";
		$rowharga=$conn->query($sql)->fetch_assoc();
		$bil = 1;
		if(isset($carian)){
			$sql = "SELECT * FROM produk WHERE isipadu = '5ml' AND (namaproduk LIKE '%$carian%' OR aroma1 LIKE '%$carian%' OR aroma2 LIKE '%$carian%' OR aroma3 LIKE '%$carian%' OR aroma4 LIKE '%$carian%' OR aroma5 LIKE '%$carian%' OR aroma6 LIKE '%$carian%')";
		}else{
			$sql = "SELECT * FROM produk WHERE isipadu = '5ml'";
		}
		$result = $conn->query($sql);
		while($row = $result->fetch_assoc()){
			?>
		<div class="col-md-4 text-center table-list-search">
			<div class="thumbnail">
				<a href="#" class="pop">
				<img src="gambarproduk.php?idproduk=<?php echo $row['idproduk']; ?>" alt="" style="width: 300px;height: 180px; border-radius: 4px" >
				</a>
				<div class="caption">
					<h5><b style="color: purple"><?php echo $row['namaproduk']; ?></b></h5>
					<h5><b>RM <?php echo $rowharga['pelanggan5ml']; ?></b></h5>
					<h6><?php echo $row['aroma1']; ?>,<?php echo $row['aroma2']; ?>,<?php echo $row['aroma3']; ?>,<?php echo $row['aroma4']; ?>,<?php echo $row['aroma5']; ?>,<?php echo $row['aroma6']; ?></h6><br>
					<?php
					if($row['stokpelanggan'] > 0) {
					?>
						<a href="index.php?menu=login" class="btn btn-warning btn-block"><span class="glyphicon glyphicon-shopping-cart"></span> Add to cart</a>
					<?php
					} else {
						?>
					<a href="#" class="btn btn-danger btn-block disabled" >Kehabisan Stok</a>
					<?php
					}
					?>
					</p>
				</div>
			</div>
		</div>
		<?php
			}
			?>
	</div>

	<!--<div class="row text-center">
		<ul class="pagination pagination">
			<li><a href="#">1</a></li>
			<li><a href="#">2</a></li>
		  </ul>
	</div>
