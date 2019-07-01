<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading text-center">
				<h5><b>SENARAI PRODUK</b></h5>
			</div>
			<div class="panel-body">
				<div class="table-responsive">
					<div class="col-md-12">
						<table class="table table-hover table-list-search">
							<thead>
							<tr>
									<th rowspan="2">BIL</th>
									<th rowspan="2">NAMA PRODUK</th>
									<th rowspan="2">ISIPADU</th>
									<th rowspan="2">GAMBAR</th>
									<th rowspan="2">KATEGORI</th>
									<th colspan="3" style="text-align: center">STOK</th>
									<th rowspan="2" style="text-align: center">AROMA</th>
									<th rowspan="2" style="width:10px">TINDAKAN</th>
							</tr>
							<tr>
								<th>PELANGGAN</th>
								<th>DROPSHIP</th>
								<th>STOKIS</th>
							</tr>
							</thead>
							<tbody>
								<?php
							$bil = 1;
							$sql = "SELECT * FROM produk";
							$result = $conn->query($sql);
							while($row = $result->fetch_assoc()){
								?>
							<a style="display: table-row;">
									<td><?php echo $bil++; ?></td>
									<td><?php echo $row['namaproduk']; ?></td>
									<td><?php echo $row['isipadu']; ?></td>
									<td>
										<a target="_blank" href="gambarproduk.php?idproduk=<?php echo $row['idproduk']; ?>">
											<img src="gambarproduk.php?idproduk=<?php echo $row['idproduk']; ?>" alt="" style="height: 80px; width: 100px; border-radius: 4px">
										</a>
									</td>
									<td><?php echo $row['kategori']; ?></td>
									<td><?php echo $row['stokpelanggan']; ?></td>
									<td><?php echo $row['stokdropship']; ?></td>
									<td><?php echo $row['stokstokis']; ?></td>
									<td>
										<?php echo $row['aroma1']; ?>/<?php echo $row['aroma2']; ?>/<?php echo $row['aroma3']; ?>/<?php echo $row['aroma4']; ?>/<?php echo $row['aroma5']; ?>/<?php echo $row['aroma6']; ?>
									</td>
									<td>
									 <a href="produk-padam.php?idproduk=<?php echo $row['idproduk']; ?>"><img src="../img/delete.png" style="width: 32px" title="Padam" onclick="return sahkan('padam')"></a>
									<a href="index.php?menu=daftarproduk&edit=<?php echo $row['idproduk']; ?>"><img src="../img/update.png" style="width: 30px" title="Kemaskini" ></a>
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
		</div>
	</div>
</div>
<script src="../inc/tindakan.js"></script>
