<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading text-center">
				<h5><b>DAFTAR PEKERJA BAHARU</b></h5>
			</div>
			<div class="panel-body"><br>
			<?php
			if(!isset($_GET['edit'])){
				?>
				<form class="form-horizontal col-md-10 col-md-offset-1" action="pekerja-simpan.php" method="post">
					<input type="hidden" name="idpekerja" value="0">
					<div class="form-group">
						<label class="col-md-4 control-label" >NAMA</label>
						<div class="col-md-5">
						<input name="namapekerja" type="text" class="form-control input-md" >
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-4 control-label">NO KAD PENGENALAN</label>
						<div class="col-md-5">
						<input name="nokppekerja" type="text" class="form-control input-md" maxlength="12" >
						<p class="help-block">Katalaluan asal ialah no kad pengenalan</p>
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-4 control-label" >JAWATAN</label>
						<div class="col-md-5">
						<select class="form-control" name="jawatan" required="">
							<option></option>
							<option>Staf</option>
							<option>Pengurus</option>
						</select>
						</div>
					</div>

					<br><div class="form-group">
						<label class="col-md-4 control-label" ></label>
						<div class="col-md-4 text-center">
						<button type="submit" class="btn btn-primary"><b>HANTAR</b></button>
						<button type="reset" onclick="window.location='index.php?menu=daftarpekerja';" class="btn btn-primary"><b>BATAL</b></button>
						</div>
					</div>
				</form>
				<?php
				}else{
					$idpekerja = $conn->real_escape_string($_GET['edit']);
					$sql = "SELECT * FROM pekerja WHERE idpekerja = $idpekerja";
					$row = $conn->query($sql)->fetch_assoc();
				?>
				<form class="form-horizontal col-md-10 col-md-offset-1" action="pekerja-simpan.php" method="post">
					<input type="hidden" name="idpekerja" value="<?php echo $idpekerja; ?>">
					<div class="form-group">
						<label class="col-md-4 control-label" >NAMA</label>
						<div class="col-md-5">
						<input name="namapekerja" type="text" class="form-control input-md" value="<?php echo $row['nama']; ?>" >
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-4 control-label">NO KAD PENGENALAN</label>
						<div class="col-md-5">
						<input name="nokppekerja" type="text" class="form-control input-md" maxlength="12" value="<?php echo $row['nokp']; ?>" >
						<p class="help-block">Katalaluan asal ialah no kad pengenalan</p>
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-4 control-label" >JAWATAN</label>
						<div class="col-md-5">
						<select class="form-control" name="jawatan">
							<option <?php if($row['jawatan']=='staf') echo ' selected="selected"'; ?> >Staf</option>
							<option <?php if($row['jawatan']=='pengurus') echo ' selected="selected"'; ?> >Pengurus</option>
						</select>
						</div>
					</div>

					<br><div class="form-group">
						<label class="col-md-4 control-label" ></label>
						<div class="col-md-4 text-center">
						<button type="submit" class="btn btn-primary"><b>HANTAR</b></button>
						<button type="reset" onclick="window.location='index.php?menu=senaraipekerja';" class="btn btn-primary"><b>BATAL</b></button>
						</div>
					</div>
				</form>
				<?php
					}
					?>
			</div>
		</div>
	</div>
</div>
