<?php
if(!isset($_SESSION['idpelanggan']));
?>
	<div class="panel panel-warning">
		<div class="panel-body">
			<div>
				<?php
				$sql = "SELECT * FROM harga";
				$rowharga=$conn->query($sql)->fetch_assoc();
				if(isset($_SESSION['idbelian']))
				{
					?>
					<div class="table-responsive">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>Barang</th>
									<th>Kuantiti</th>
									<th>Harga/unit</th>
									<th>Jumlah Harga</th>
									<th>Tindakan</th>
								</tr>
							</thead>
								<tbody>
									<?php
									$idbelian = $_SESSION['idbelian'];
									$bil = 1;
									$sql = "SELECT * FROM produk
											JOIN detailbelian ON produk.idproduk = detailbelian.produk
											WHERE detailbelian.belian = $idbelian";
									$result = $conn->query($sql);
									$totalharga = 0;
									while($row = $result->fetch_assoc()){
										$harga = $rowharga['stokis'.$row['isipadu']];
										$jumlahharga = $harga * $row['kuantiti'];
										$totalharga += $jumlahharga;
										?>
								<tr>
								<td><?php echo $row['namaproduk']; ?></td>
								<td><input type="number" style="width: 80px" id="<?php echo $row['iddetailbelian']; ?>" class="form-control" value="<?php echo $row['kuantiti'];?>" min="1" max="<?php echo $row['stokstokis']; ?>" /></td>
								<td>RM <?php echo $harga; ?></td>
								<td>RM <?php echo $jumlahharga;?>.00</td>
								<td class="text-center">
								<a href="bakulbelian-padam.php?iddetailbelian=<?php echo $row['iddetailbelian']; ?>"><img src="../../img/delete.png" style="width: 32px" title="Padam" onclick="return sahkan('padam');"></a>
								</td>
								</tr>
								<?php
							}
							?>
								<tr>
									<th colspan="3"><span class="pull-right">Jumlah Harga (Termasuk GST 6%)</span></th>
									<th>RM <?php echo $totalharga;?>.00</th>
									<th></th>
								</tr>

							</tbody>
						</table>
						<a href="pembayaran-simpan.php" class="btn btn-warning btn-block" style="float: right">CHECKOUT</a>
					</div>
					<?php
				}
				else
				{
					$sql = "SELECT * FROM belian WHERE pelanggan = '$idpelanggan' AND status is null";
					$result = $conn->query($sql);
					if($result->num_rows > 0) {
						$row = $result->fetch_assoc();
						$idbelian = $row['idbelian'];
						$sql = "SELECT * FROM produk
								JOIN detailbelian ON produk.idproduk = detailbelian.produk
								WHERE detailbelian.belian = $idbelian";
						$result = $conn->query($sql);
						}
						?>

					<div class="table-responsive">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>Barang</th>
									<th>Kuantiti</th>
									<th>Harga/unit</th>
									<th>Jumlah Harga</th>
									<th>Tindakan</th>
								</tr>
							</thead>
								<tbody>
									<?php
									$totalharga = 0;
									while($row = $result->fetch_assoc()){
										$harga = $rowharga['pelanggan'.$row['isipadu']];
										$jumlahharga = $harga * $row['kuantiti'];
										$totalharga += $jumlahharga;
										?>
								<tr>
								<td><?php echo $row['namaproduk']; ?></td>
								<td><input type="number" style="width: 80px" id="<?php echo $row['iddetailbelian']; ?>" class="form-control" value="<?php echo $row['kuantiti'];?>" min="1" max="<?php echo $row['stokstokis']; ?>"/></td>
								<td>RM <?php echo $harga; ?></td>
								<td>RM <?php echo $jumlahharga;?>.00</td>
								<td class="text-center">
								<a href="bakulbelian-padam.php?iddetailbelian=<?php echo $row['iddetailbelian']; ?>"><img src="../../img/delete.png" style="width: 32px" title="Padam" onclick="return sahkan('padam');"></a>
								</td>
								</tr>
								<?php
							}
							?>
								<tr>
									<th colspan="3"><span class="pull-right">Jumlah Harga (Termasuk GST 6%)</span></th>
									<th>RM <?php echo $totalharga;?>.00</th>
									<th></th>
								</tr>

							</tbody>
						</table>
						<a href="pembayaran-simpan.php" class="btn btn-warning btn-block" style="float: right">CHECKOUT</a>
					</div>
				<?php
				}
					?>
			</div>
		</div>
	</div>

	<div class="table-responsive">
		<div class="col-md-12">
			<div class="pre-scrollable">
			<table class="table table-hover table-list-search" >
				<thead>
				<tr>
						<th>BIL</th>
						<th>NAMA PRODUK</th>
						<th>ISIPADU</th>
						<th>KATEGORI</th>
				</tr>
				</thead>
				<tbody>
					<?php
				$bil = 1;
				$sql = "SELECT * FROM produk";
				$result = $conn->query($sql);
				while($row = $result->fetch_assoc()){
					?>

				<tr>
						<td><?php echo $bil++; ?></td>
						<td><?php echo $row['namaproduk']; ?></td>
						<td><?php echo $row['isipadu']; ?></td>
						<td><?php echo $row['kategori']; ?></td>
						<td>
							<?php
							if($row['stokpelanggan'] > 0) {
							?>
							<a href="belian-simpan.php?idproduk=<?php echo $row['idproduk']; ?>" class="btn btn-warning btn-block"><span class="glyphicon glyphicon-shopping-cart"></span> Add to cart</a>
							<?php
							} else {
								?>
							<a href="#" class="btn btn-danger btn-block disabled" >Kehabisan Stok</a>
							<?php
							}
							?>
						</td>
				</tr>
				<?php
		}
		?>
				</tbody>
			 </table>
			</div>
		</div>
	</div>

<script src="inc/tindakan.js"></script>

<script>
	$(function() {
		$('input[type=number]').on('keyup change', function() {
			kuantiti = $(this).val();
			kuantiti = Number(kuantiti);
			iddetailbelian = $(this).attr('id');
			maksima = $(this).attr('max');
			if(kuantiti > maksima){
				alert('Haraf maaf, stok terhad kepada '+maksima+'  botol sahaja!');
				$(this).val(maksima);
			}else{
				window.location='bakulbelian-update.php?kuantiti='+kuantiti+'&iddetailbelian='+iddetailbelian;
			}
		});
	});
</script>
