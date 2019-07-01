	<div class="row">
			<div class="col-md-4">
				<div class="panel panel-default">
					<div class="panel-heading text-center">
						 <h5><b>DAFTAR PAKEJ BAHARU</b></h5>
					</div>
					<div class="panel-body"><br>
					<?php
					if(!isset($_GET['edit'])){
						?>
						<form enctype="multipart/form-data" action="pakej-simpan.php" method="post" class="form-horizontal">
							<input type="hidden" name="idpakej" value="0">
							<div class="form-group">
								<label class="col-md-4 control-label" >KATEGORI</label>
								<div class="col-md-8">
									<select class="form-control" name="kategori" required="">
										<option></option>
										<option>Dropship</option>
										<option>Stokis</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-4 control-label" >HARGA (RM)</label>
								<div class="col-md-8">
									<input type="text" name="harga" placeholder="harga" class="form-control input-md"  maxlength="7" required="">
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
							<div class="form-group">
								<label class="col-md-4 control-label" ></label>
								<div class="col-md-12 text-center">
								<button type="submit" class="btn btn-primary"><b>HANTAR</b></button>
								<button type="reset" onclick="window.location='index.php?menu=daftarpakej';" class="btn btn-primary"><b>BATAL</b></button>
								</div>
							</div>
						</form>
						<?php
					}else{
						$idpakej = $conn->real_escape_string($_GET['edit']);
						$sql = "SELECT * FROM pakej WHERE idpakej = $idpakej";
						$row = $conn->query($sql)->fetch_assoc();
					?>
						<form enctype="multipart/form-data" action="pakej-simpan.php" method="post" class="form-horizontal">
							<input type="hidden" name="idpakej" value="<?php echo $idpakej; ?>">
							<div class="form-group">
								<label class="col-md-4 control-label" >KATEGORI</label>
								<div class="col-md-8">
									<select class="form-control" name="kategori">
										<option <?php if($row['kategori']=='Dropship') echo ' selected="selected"'; ?>>Dropship</option>
										<option <?php if($row['kategori']=='Stokis') echo ' selected="selected"'; ?>>Stokis</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-4 control-label" >HARGA (RM)</label>
								<div class="col-md-8">
									<input type="text" name="harga" placeholder="harga" class="form-control input-md"  maxlength="7" value="<?php echo $row['harga']; ?>">
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-4 control-label" >GAMBAR</label>
								<div class="col-md-8">
									<div class="input-group" >
										<input type="file" accept="image/png, image/jpeg, image/gif" name="image" /> <!-- rename it -->
									</div>
								</div>
								<img id='img-upload'/>
							</div>
							<div class="form-group">
								<label class="col-md-4 control-label" ></label>
								<div class="col-md-12 text-center">
								<button type="submit" class="btn btn-primary"><b>HANTAR</b></button>
								<button type="reset" onclick="window.location='index.php?menu=daftarpakej';" class="btn btn-primary"><b>BATAL</b></button>
								</div>
							</div>
						</form>
						 <?php
					}
					?>
					</div>
				</div>
			</div>
			<div class="col-md-8">
				<div class="panel panel-default">
					<div class="panel-heading text-center">
						 <h5><b>SENARAI PAKEJ</b></h5>
					</div>
					<div class="panel-body"><br>
						<div class="table-responsive">
							<div class="col-md-12">
								<table class="table table-list-search">
									<thead>
										<tr>
											<th>BIL</th>
											<th>GAMBAR</th>
											<th>HARGA</th>
											<th>KATEGORI</th>
											<th>TINDAKAN</th>
										</tr>
									</thead>
									<tbody>
									<?php
									$bil = 1;
									$sql = "SELECT * FROM pakej";
									$result = $conn->query($sql);
									while($row = $result->fetch_assoc()){
										?>
										<tr>
											<td><?php echo $bil++; ?></td>
											<td><img src="gambarpakej.php?idpakej=<?php echo $row['idpakej']; ?>" alt="" style="height: 120px; width: 200px; border-radius: 4px"></td>
											<td>RM <?php echo $row['harga']; ?>.00</td>
											<td><?php echo $row['kategori']; ?></td>
											<td>
											<a href="pakej-padam.php?idpakej=<?php echo $row['idpakej']; ?>"><img src="../img/delete.png" style="width: 32px" title="Padam" onclick="return sahkan('padam')"></a>
											<a href="index.php?menu=daftarpakej&edit=<?php echo $row['idpakej']; ?>"><img src="../img/update.png" style="width: 30px" title="Kemaskini" ></a>
											</td>
										</tr>
									</tbody>
									<?php
								}
								?>
								</table>
								<!--<div class="row text-center">
								<ul class="pagination pagination">
									<li><a href="#">1</a></li>
									<li><a href="#">2</a></li>
								</ul>
							</div>-->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<script src="../inc/tindakan.js"></script>
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
	width:90%;
}
</style>
