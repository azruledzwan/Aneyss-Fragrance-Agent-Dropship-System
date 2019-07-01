	<div class="panel panel-default">
		<div class="panel-heading text-center">
			<h5><b>SAHKAN ALAMAT PENGHANTARAN</b></h5>
		</div>
		<div class="panel-body">
			<?php
			$idpelanggan = $_SESSION['idpelanggan'];
			$sql = "SELECT * FROM pelanggan WHERE idpelanggan = $idpelanggan";
			$row = $conn->query($sql)->fetch_assoc();
			?>
			<form class="form-horizontal form-left" method="post" action="user-simpan.php">
				<input type="hidden" name="idpelanggan" value="<?php echo $row['idpelanggan']; ?>">
					<!-- Text input--><br>
					<div class="form-group">
						<label class="col-md-4 control-label" for="fullname">NAMA</label>
						<div class="col-md-6">
						<input name="nama" type="text" class="form-control input-md" value="<?php echo $row['nama']; ?>">

						</div>
					</div>

					<!-- Text input-->
						<div class="form-group">
							<label class="col-md-4 control-label" for="phone">NO. TELEFON</label>
							<div class="col-md-6">
							<input  name="notelefon"  value="<?php echo $row['notelefon']; ?>" type="text" class="form-control input-md" maxlength="11" onkeypress='return event.charCode >= 48 && event.charCode <= 57' >

							</div>
						</div>

					<div class="form-group">
						<label class="col-md-4 control-label" for="address">ALAMAT</label>
							<div class="col-md-6">
						<textarea rows="3" type="text" name="alamat" class="form-control" ><?php echo $row['alamat']; ?></textarea>
					  </div>
					</div>

					<div class="form-group">
						<label class="col-md-4 control-label" >BANDAR</label>
						<div class="col-md-6">
						<input name="bandar" type="text" class="form-control input-md" value="<?php echo $row['bandar']; ?>" >

						</div>
					</div>

					<div class="form-group">
						<label class="col-md-4 control-label">NEGERI</label>
						<div class="col-md-6">
						<select class="form-control" name="negeri">
							<option value="">Sila pilih negeri</option>
							<option <?php if($row['negeri']=='Johor') echo ' selected="selected"'; ?>>Johor</option>
							<option <?php if($row['negeri']=='Kedah') echo ' selected="selected"'; ?>>Kedah</option>
							<option <?php if($row['negeri']=='Kelantan') echo ' selected="selected"'; ?>>Kelantan</option>
							<option <?php if($row['negeri']=='Melaka') echo ' selected="selected"'; ?>>Melaka</option>
							<option <?php if($row['negeri']=='Negeri Sembilan') echo ' selected="selected"'; ?>>Negeri Sembilan</option>
							<option <?php if($row['negeri']=='Pahang') echo ' selected="selected"'; ?>>Pahang</option>
							<option <?php if($row['negeri']=='Perak') echo ' selected="selected"'; ?>>Perak</option>
							<option <?php if($row['negeri']=='Perlis') echo ' selected="selected"'; ?>>Perlis</option>
							<option <?php if($row['negeri']=='Pulau Pinang') echo ' selected="selected"'; ?>>Pulau Pinang</option>
							<option <?php if($row['negeri']=='Sabah') echo ' selected="selected"'; ?>>Sabah</option>
							<option <?php if($row['negeri']=='Sarawak') echo ' selected="selected"'; ?>>Sarawak</option>
							<option <?php if($row['negeri']=='Selangor') echo ' selected="selected"'; ?>>Selangor</option>
							<option <?php if($row['negeri']=='Terengganu') echo ' selected="selected"'; ?>>Terengganu</option>
							<option <?php if($row['negeri']=='Wilayah Persekutuan Kuala Lumpur') echo ' selected="selected"'; ?>>Wilayah Persekutuan Kuala Lumpur</option>
							<option <?php if($row['negeri']=='Wilayah Persekutuan Labuan') echo ' selected="selected"'; ?>>Wilayah Persekutuan Labuan</option>
							<option <?php if($row['negeri']=='Wilayah Persekutuan Putrajaya') echo ' selected="selected"'; ?>>Wilayah Persekutuan Putrajaya</option>
						</select>
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-4 control-label" >POSKOD</label>
						<div class="col-md-2">
						<input name="poskod" type="text" class="form-control input-md"  value="<?php echo $row['poskod']; ?>" >

						</div>
					</div>
					<center><button type="submit" class="btn btn-info" ><b>HANTAR</b></button></center>
			</form>
				</div>
			</div>
	<script src="inc/delete.js"></script>
