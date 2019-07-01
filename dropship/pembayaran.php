<?php
if(!isset($_SESSION['idpelanggan']));
?>

	<div class="panel panel-default">
		<div class="panel-heading text-center">
			<h5><b>Confirm Payment</b></h5>
		</div>
		<div class="panel-body">
			<div class="table-responsive">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>Barang</th>
							<th>Kuantiti</th>
							<th>Harga/unit</th>
							<th>Jumlah Harga</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$idbelian = $_SESSION['idbelian'];
						$sql = "SELECT * FROM pelanggan
								JOIN kospenghantaran ON pelanggan.negeri = kospenghantaran.negeri
								WHERE idpelanggan = '$idpelanggan'";
						$row=$conn->query($sql)->fetch_assoc();
						$negeri = $row['negeri'];
						$cas = $row['cas'];
						$sql = "SELECT * FROM harga";
						$rowharga=$conn->query($sql)->fetch_assoc();
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
							<td><?php echo $row['kuantiti']; ?></td>
							<td>RM <?php echo $harga; ?></td>
							<td>RM <?php echo $jumlahharga;?>.00</td>
						</tr>
						<?php
					}
					$totalharga += $cas;
					?>
						<tr>
							<th colspan="3"><span class="pull-right">Caj Penghantaran (<?php echo $negeri; ?>)</span></th>
							<th>RM <?php echo $cas; ?></th>
						</tr>
						<tr>
							<th colspan="3"><span class="pull-right">Jumlah (Termasuk GST 6%)</span></th>
							<th>RM <?php echo $totalharga;?>.00</th>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>

		<div class="panel panel-default">
		  <div class="panel-heading">
			<h4 class="panel-title">
			  <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Pembayaran secara manual</a>
			</h4>
		  </div>
				<div class="panel-body">
					<form  class="upload-form" enctype="multipart/form-data" method="post" action="pembayaran-simpan.php">
							<input type="hidden" name="idbelian" value="<?php echo $idbelian; ?>">
							<input type="hidden" name="status" value="baru">
							<span class="glyphicon glyphicon-ok-sign"></span>  Menggunakan Perbankan Internet atau ATM untuk memindahkan jumlah pembayaran ke Akaun Bank kami<br><br>
						<span class="glyphicon glyphicon-ok-sign"></span> Selepas pemindahan, sila ambil gambar resit atau tangkapan skrin dan muat naiknya supaya kami dapat mengesahkan penerimaan pembayaran anda.
						ia mungkin mengambil masa sehingga 3 hari bekerja untuk pengesahan pembayaran bergantung kepada masa pemprosesan bank<br><br>

						<img class="img-responsive col-md-8" src="../img/maybank.png" style="width: 150px;height: 100px">
						<b>Maybank</b><br><br>
						<p>Nama akaun : <b>Hafizah Abdullah</b><br>
						Nombor akaun : <b>16276596550</b></p><br><br>
						<center><div class="col-md-12">
							<div class="form-group">
								<label class="col-md-12 control-label" >MUAT NAIK RESIT</label><br><br>
								<div class="col-md-12">
									<div class="input-group" >
										<input type="file" name="image" id="file" accept="image/png, image/jpeg, image/gif" onchange="preview_image(event)" required="" />
									</div><br><p>(Max: 2,048KiB)</p>
									<img id='img-upload'/><br>
									<center><img id="output_image"/></center>
								</div>
									<img id='img-upload'/>
							</div><br>
						</div><br>
						<div class="col-md-12"><br>
							<center><button type="submit" class="btn btn-primary">HANTAR</button></center>
						</div><br><br><br>
					</form>
				</div>
			</div>
		</div>

	  <script src="inc/delete.js"></script>
		<script>
		function preview_image(event) {
			var reader = new FileReader();
			reader.onload = function()
			{
				var output = document.getElementById('output_image');
				output.src = reader.result;
				}
				reader.readAsDataURL(event.target.files[0]);
				}

		//binds to onchange event of your input field
		$(document).ready(function() {
		    $('input[type="file"]').change(function(event) {
		        var totalBytes = this.files[0].size;
		        if(totalBytes < 1000000){
		            var _size = Math.floor(totalBytes/1000) + 'KB';
		            //alert(_size);
		            }else{
		                var _size = Math.floor(totalBytes/1000000) + 'MB';
		                alert(_size+" \nSaiz gambar yang dipilih terlalu besar, sila pilih semula");
		                this.value="";
		                }
		                });
		    });
		</script>
		<style>
		#output_image
		{
			width:300px;
		}
		</style>
