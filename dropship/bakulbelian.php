<?php
if(!isset($_SESSION['idpelanggan']));
?>
	<div class="panel panel-default">
		<div class="panel-heading text-center">
			<h5><b>BAKUL BELIAN</b></h5>
		</div>
		<div class="panel-body">
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
									$harga = $rowharga['dropship'.$row['isipadu']];
									$jumlahharga = $harga * $row['kuantiti'];
									$totalharga += $jumlahharga;
									?>
							<tr>
							<td><?php echo $row['namaproduk']; ?></td>
							<td><input type="number" style="width: 80px" id="<?php echo $row['iddetailbelian']; ?>" class="form-control" value="<?php echo $row['kuantiti'];?>" min="1" max="<?php echo $row['stokdropship']; ?>" /></td>
							<td>RM <?php echo $harga; ?></td>
							<td>RM <?php echo $jumlahharga;?>.00</td>
							<td class="text-center">
							<a href="bakulbelian-padam.php?iddetailbelian=<?php echo $row['iddetailbelian']; ?>"><img src="../img/delete.png" style="width: 32px" title="Padam" onclick="return confirm('Adakah Anda Pasti Untuk Padam Maklumat Ini?');"></a>
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
					<a href="index.php?menu=sahkanalamat" class="btn btn-warning" style="float: right">CHECKOUT</a>
					<a href="index.php?menu=utama" class="btn btn-info" style="float: left">SAMBUNG BELIAN</a>
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
									$harga = $rowharga['dropship'.$row['isipadu']];
									$jumlahharga = $harga * $row['kuantiti'];
									$totalharga += $jumlahharga;
									?>
							<tr>
							<td><?php echo $row['namaproduk']; ?></td>
							<td><input type="number" style="width: 80px" id="<?php echo $row['iddetailbelian']; ?>" class="form-control" value="<?php echo $row['kuantiti'];?>" min="1" max="<?php echo $row['stokdropship']; ?>" /></td>
							<td>RM <?php echo $harga; ?></td>
							<td>RM <?php echo $jumlahharga;?>.00</td>
							<td class="text-center">
							<a href="bakulbelian-padam.php?iddetailbelian=<?php echo $row['iddetailbelian']; ?>"><img src="../img/delete.png" style="width: 32px" title="Padam" onclick="return confirm('Adakah Anda Pasti Untuk Padam Maklumat Ini?');"></a>
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
					<a href="index.php?menu=sahkanalamat" class="btn btn-warning" style="float: right">CHECKOUT</a>
					<a href="index.php?menu=utama" class="btn btn-info" style="float: left">SAMBUNG BELIAN</a>
				</div>
			<?php
			}
				?>
		</div>
	</div>
<script src="inc/delete.js"></script>

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
