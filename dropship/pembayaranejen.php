<?php
if(!isset($_SESSION['idpelanggan']));
?>
<div class="row" >
	<div class="col-md-12">
		<div class="panel panel-warning">
		  <div class="panel-heading">
			<h4 class="panel-title">
			  <span class="text-center">Sila upload resit anda sebelum meneruskan pembelian</span>
			</h4>
		  </div>
				<div class="panel-body">
					<form enctype="multipart/form-data" method="post" action="pembayaranejen-simpan.php">
							<input type="hidden" name="idpelanggan" value="<?php echo $row['idpelanggan']; ?>">
							<input type="hidden" name="status" value="tidaksah">
							<span class="glyphicon glyphicon-ok-sign"></span> Menggunakan Perbankan Internet atau ATM untuk memindahkan jumlah pembayaran ke Akaun Bank kami<br><br>
						<span class="glyphicon glyphicon-ok-sign"></span> Selepas pemindahan, sila ambil gambar resit atau tangkapan skrin dan muat naiknya supaya kami dapat mengesahkan penerimaan pembayaran anda.
						ia mungkin mengambil masa sehingga 3 hari bekerja untuk pengesahan pembayaran bergantung kepada masa pemprosesan bank<br><br>

						<img class="img-responsive col-md-8" src="../img/maybank.png" style="width: 150px;height: 100px">
						<b>Maybank</b><br><br>
						<p>Nama akaun : <b>Hafizah Abdullah</b><br>
						Nombor akun : <b>16276596550</b></p><br><br>
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
						<div class="col-md-12">
							<center><button type="submit" class="btn btn-primary">HANTAR</button></center>
						</div><br><br><br>
					</form>
				</div>
			</div>
		</div>
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
