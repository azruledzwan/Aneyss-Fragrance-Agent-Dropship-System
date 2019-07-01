<div class="row">
		<?php
		$sql = "SELECT * FROM harga";
		$rowharga=$conn->query($sql)->fetch_assoc();
		$bil = 1;
		$sql = "SELECT * FROM produk WHERE kategori = 'perempuan' AND isipadu = '30ml'";
		$result = $conn->query($sql);
		while($row = $result->fetch_assoc()){
			?>
		<div class="col-md-4 text-center table-list-search">
			<div class="thumbnail">
				<img src="gambarproduk.php?idproduk=<?php echo $row['idproduk']; ?>" alt="" style="width: 300px;height: 180px; border-radius: 4px" >
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
		$sql = "SELECT * FROM produk WHERE kategori = 'perempuan' AND isipadu = '5ml'";
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
	</div>