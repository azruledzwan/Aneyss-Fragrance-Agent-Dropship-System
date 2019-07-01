<?php
if(!isset($_SESSION['idpelanggan']));
?>
<div class="row" >
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading text-center">
						 <h5><b>PEMBELIAN SAYA</b></h5>
					</div>
			<div class="panel-body" >
				<div class="col-md-12">
					<div class="table-responsive">
						<div class="col-md-12">
							<table class="table table-hover table-condensed table-list-search" >
								<thead>
								<tr>
										<th>BIL</th>
										<th>NAMA PRODUK</th>
										<th>KUANTITI</th>
										<th>JUMLAH HARGA</th>
										<th>TARIKH BELI</th>
										<th>STATUS</th>
										<th>TRACKING NO</th>
								</tr>
								</thead>
								<tbody>
								<?php

								$bil = 1;
								$sql = "SELECT * FROM harga";
								$rowharga=$conn->query($sql)->fetch_assoc();
								$sql = "SELECT * ,belian.status AS statusbelian FROM belian
												JOIN detailbelian ON belian.idbelian = detailbelian.belian
												JOIN produk ON detailbelian.produk = produk.idproduk
												JOIN pelanggan ON belian.pelanggan = pelanggan.idpelanggan
												WHERE pelanggan = $idpelanggan";
								$result = $conn->query($sql);
								//echo $sql.'<br>'.$conn->error;
								while($row = $result->fetch_assoc()){
									$harga = $rowharga['dropship'.$row['isipadu']];
									$jumlahharga = $harga * $row['kuantiti'];
									$status = $row['status'];
									?>
								<tr>
										<td><?php echo $bil++; ?></td>
										<td><?php echo $row['namaproduk']; ?></td>
										<td><?php echo $row['kuantiti']; ?></td>
										<td>RM <?php echo $jumlahharga; ?>.00</td>
										<td><?php echo tarikh($row['tarikhbeli']); ?></td>
										<td><?php echo $row['statusbelian']; ?></td>
										<td style="color:red"><b><?php echo $row['trackingnumber']; ?></b></td>
								</tr>
								<?php
								}
								?>
								</tbody>
							</table>
							<!-- <div class="row text-center">
								<ul class="pagination pagination">
									<li><a href="#">1</a></li>
									<li><a href="#">2</a></li>
								</ul>
							</div> -->

						</div>
					</div>
				   </div>
			</div>
		</div>
	</div>
</div>
