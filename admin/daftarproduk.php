	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading text-center">
					 <h5><b>DAFTAR PRODUK BAHARU</b></h5>
				</div>
				<div class="panel-body"><br>
				<?php
					if(!isset($_GET['edit'])){
						?>
					<form enctype="multipart/form-data" action="produk-simpan.php" method="post" class="form-horizontal">
						<input type="hidden" name="idproduk" value="0">
						<input type="hidden" name="stokpelanggan" value="0">
						<input type="hidden" name="stokdropship" value="0">
						<input type="hidden" name="stokstokis" value="0">
						<div class="form-group">
							<label class="col-md-4 control-label">NAMA PRODUK</label>
							<div class="col-md-4">
								<input name="namaproduk" type="text" placeholder="nama produk" class="form-control input-md" >
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label" >ISIPADU</label>
							<div class="col-md-2">
								<select class="form-control" name="isipadu">
									<option>30ml</option>
									<option>5ml</option>
								</select>
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label" >KATEGORI</label>
							<div class="col-md-2">
								<select class="form-control" name="kategori">
									<option>Lelaki</option>
									<option>Perempuan</option>
								</select>
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label" >GAMBAR</label>
							<div class="col-md-8">
								<div class="input-group" >
									<input type="file" name="image" id="file" accept="image/png, image/jpeg, image/gif" onchange="preview_image(event)" required="" />
								</div><br><p>(Max: 2,048KiB)</p>
								<img id='img-upload'/><br>
								<img id="output_image"/>
							</div>
								<img id='img-upload'/>
						</div>


						<hr>

						<div class="form-group">
								<label class="col-md-4 control-label" >AROMA 1</label>
							<div class="col-md-4">
								<select class="form-control" name="aroma1">
									<option>-</option>
									<?php
										$sql = "SELECT * FROM aroma";
										$result = $conn->query($sql);
										while($row = $result->fetch_assoc()){
									?>
									<option><?php echo $row['aroma']; ?></option>
									<?php
									}
									?>
								</select>
							</div>
						</div>

						<div class="form-group">
								<label class="col-md-4 control-label" >AROMA 2</label>
							<div class="col-md-4">
								<select class="form-control" name="aroma2">
									<option>-</option>
									<?php
										$sql = "SELECT * FROM aroma";
										$result = $conn->query($sql);
										while($row = $result->fetch_assoc()){
									?>
									<option><?php echo $row['aroma']; ?></option>
									<?php
									}
									?>
								</select>
							</div>
						</div>

						<div class="form-group">
								<label class="col-md-4 control-label" >AROMA 3</label>
							<div class="col-md-4">
								<select class="form-control" name="aroma3">
									<option>-</option>
									<?php
										$sql = "SELECT * FROM aroma";
										$result = $conn->query($sql);
										while($row = $result->fetch_assoc()){
									?>
									<option><?php echo $row['aroma']; ?></option>
									<?php
									}
									?>
								</select>
							</div>
						</div>

						<div class="form-group">
								<label class="col-md-4 control-label" >AROMA 4</label>
							<div class="col-md-4">
								<select class="form-control" name="aroma4">
									<option>-</option>
									<?php
										$sql = "SELECT * FROM aroma";
										$result = $conn->query($sql);
										while($row = $result->fetch_assoc()){
									?>
									<option><?php echo $row['aroma']; ?></option>
									<?php
									}
									?>
								</select>
							</div>
						</div>

						<div class="form-group">
								<label class="col-md-4 control-label" >AROMA 5</label>
							<div class="col-md-4">
								<select class="form-control" name="aroma5">
									<option>-</option>
									<?php
										$sql = "SELECT * FROM aroma";
										$result = $conn->query($sql);
										while($row = $result->fetch_assoc()){
									?>
									<option><?php echo $row['aroma']; ?></option>
									<?php
									}
									?>
								</select>
							</div>
						</div>

						<div class="form-group">
								<label class="col-md-4 control-label" >AROMA 6</label>
							<div class="col-md-4">
								<select class="form-control" name="aroma6">
									<option>-</option>
									<?php
										$sql = "SELECT * FROM aroma";
										$result = $conn->query($sql);
										while($row = $result->fetch_assoc()){
									?>
									<option><?php echo $row['aroma']; ?></option>
									<?php
									}
									?>
								</select>
							</div>
						</div>

						<center><div class="form-group">
							<label class="col-md-4 control-label" ></label>
							<div class="col-md-4 text-center">
								<button type="submit" class="btn btn-primary"><b>HANTAR</b></button>
								<button type="reset" onclick="window.location='index.php?menu=daftarproduk';" class="btn btn-primary"><b>BATAL</b></button>
							</div>
						</div></center>
					</form>
					<?php
					}else{
						$idproduk = $conn->real_escape_string($_GET['edit']);
						$sql = "SELECT * FROM produk WHERE idproduk = $idproduk";
						$row = $conn->query($sql)->fetch_assoc();
					?>
					<form enctype="multipart/form-data" action="produk-simpan.php " method="post" class="form-horizontal">
						<input type="hidden" name="idproduk"  value="<?php echo $idproduk; ?>">
						<input type="hidden" name="stokpelanggan" value="<?php echo $stokpelanggan ?>">
						<input type="hidden" name="stokdropship" value="<?php echo $stokdropship; ?>">
						<input type="hidden" name="stokstokis" value="<?php echo $stokstokis; ?>">
						<div class="form-group">
							<label class="col-md-4 control-label">NAMA PRODUK</label>
							<div class="col-md-4">
								<input name="namaproduk" type="text" placeholder="nama produk" class="form-control input-md"  value="<?php echo $row['namaproduk']; ?>" >
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label" >ISIPADU</label>
							<div class="col-md-2">
								<select class="form-control" name="isipadu">
									<option <?php if($row['isipadu']=='30ml') echo ' selected="selected"'; ?>>30ml</option>
									<option <?php if($row['isipadu']=='5ml') echo ' selected="selected"'; ?>>5ml</option>
								</select>
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label" >KATEGORI</label>
							<div class="col-md-2">
								<select class="form-control" name="kategori">
									<option>Lelaki</option>
									<option>Perempuan</option>
								</select>
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label" >GAMBAR</label>
							<div class="col-md-8">
								<div class="input-group" >
									<input type="file" name="image" id="file" accept="image/png, image/jpeg, image/gif" onchange="preview_image(event)" required=""  value="<?php echo $row['gambar']['tmp_name']; ?>"/>
								</div><br><p>(Max: 2,048KiB)</p>
								<img id='img-upload'/><br>
								<img id="output_image"/>
							</div>
								<img id='img-upload'/>
						</div>


						<hr>

						<div class="form-group">
								<label class="col-md-4 control-label" >AROMA 1</label>
							<div class="col-md-4">
								<select class="form-control" name="aroma1">
									<option>-</option>
									<?php
										$sql = "SELECT * FROM aroma";
										$result = $conn->query($sql);
										while($row = $result->fetch_assoc()){
									?>
									<option><?php echo $row['aroma']; ?></option>
									<?php
									}
									?>
								</select>
							</div>
						</div>

						<div class="form-group">
								<label class="col-md-4 control-label" >AROMA 2</label>
							<div class="col-md-4">
								<select class="form-control" name="aroma2">
									<option>-</option>
									<?php
										$sql = "SELECT * FROM aroma";
										$result = $conn->query($sql);
										while($row = $result->fetch_assoc()){
									?>
									<option><?php echo $row['aroma']; ?></option>
									<?php
									}
									?>
								</select>
							</div>
						</div>

						<div class="form-group">
								<label class="col-md-4 control-label" >AROMA 3</label>
							<div class="col-md-4">
								<select class="form-control" name="aroma3">
									<option>-</option>
									<?php
										$sql = "SELECT * FROM aroma";
										$result = $conn->query($sql);
										while($row = $result->fetch_assoc()){
									?>
									<option><?php echo $row['aroma']; ?></option>
									<?php
									}
									?>
								</select>
							</div>
						</div>

						<div class="form-group">
								<label class="col-md-4 control-label" >AROMA 4</label>
							<div class="col-md-4">
								<select class="form-control" name="aroma4">
									<option>-</option>
									<?php
										$sql = "SELECT * FROM aroma";
										$result = $conn->query($sql);
										while($row = $result->fetch_assoc()){
									?>
									<option><?php echo $row['aroma']; ?></option>
									<?php
									}
									?>
								</select>
							</div>
						</div>

						<div class="form-group">
								<label class="col-md-4 control-label" >AROMA 5</label>
							<div class="col-md-4">
								<select class="form-control" name="aroma5">
									<option>-</option>
									<?php
										$sql = "SELECT * FROM aroma";
										$result = $conn->query($sql);
										while($row = $result->fetch_assoc()){
									?>
									<option><?php echo $row['aroma']; ?></option>
									<?php
									}
									?>
								</select>
							</div>
						</div>

						<div class="form-group">
								<label class="col-md-4 control-label" >AROMA 6</label>
							<div class="col-md-4">
								<select class="form-control" name="aroma6">
									<option>-</option>
									<?php
										$sql = "SELECT * FROM aroma";
										$result = $conn->query($sql);
										while($row = $result->fetch_assoc()){
									?>
									<option><?php echo $row['aroma']; ?></option>
									<?php
									}
									?>
								</select>
							</div>
						</div>

						<center><div class="form-group">
							<label class="col-md-4 control-label" ></label>
							<div class="col-md-4 text-center">
								<button type="submit" class="btn btn-primary"><b>HANTAR</b></button>
								<button type="reset" onclick="window.location='index.php?menu=senaraiproduk';" class="btn btn-primary"><b>BATAL</b></button>
							</div>
						</div></center>
					</form>
						<?php
					}
					?>
				</div>
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
		width:50%;
	}
	</style>
