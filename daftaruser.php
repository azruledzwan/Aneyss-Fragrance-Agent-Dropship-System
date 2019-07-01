
<style>
		p.required {
	font-size: 11px;
	text-align: right;
	color: #EB340A }
</style>
	<div class="row" >
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading text-center">
					<h5><b>DAFTAR PENGGUNA</b></h5>
				</div>

				<div class="panel-body">
					<div>
						<form class="form-horizontal form-left" method="post" action="user-simpan.php" >
							<fieldset><br>
							 <input type="hidden" name="idpelanggan" value="0">
							 <input type="hidden" name="level" value="pelanggan">
							 <input type="hidden" name="status" value="sah">
							 <input type="hidden" name="resit" value="0">
							 <input type="hidden" name="pakej" value="0">
							 <!-- Text input-->
							<div class="form-group">
								<label class="col-md-4 control-label">ID PENGGUNA</label>
								<div class="col-md-6">
								<input name="idpengguna" type="text" placeholder="idpengguna" class="form-control input-md" >
								</div>
							</div>

							<!-- Password input-->
							<div class="form-group">
								<label class="col-md-4 control-label">KATALALUAN</label>
								<div class="col-md-6">
									<input type="password" name="katalaluan" placeholder="katalaluan" class="form-control input-md" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">

								</div>
							</div>

							<!-- Password input-->
							<div class="form-group">
								<label class="col-md-4 control-label">ULANG KATALALUAN</label>
								<div class="col-md-6">
									<input  type="password" name="ulangkatalaluan" placeholder="ulang katalaluan" class="form-control input-md" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" >
								</div>
							</div>

							<!-- Text input-->
							<div class="form-group">
								<label class="col-md-4 control-label" for="fullname">NAMA PENUH</label>
								<div class="col-md-6">
								<input name="nama" type="text" placeholder="namapenuh" class="form-control input-md" >

								</div>
							</div>

							<div class="form-group">
								<label class="col-md-4 control-label">NO KAD PENGENALAN</label>
								<div class="col-md-6">
								<input name="nokp" type="text" placeholder="no kad pengenalan" class="form-control input-md" maxlength="12">
								</div>
							</div>

							<!-- Text input-->
							<div class="form-group">
								<label class="col-md-4 control-label" for="email">EMEL</label>
								<div class="col-md-6">
								<input name="emel" type="email" placeholder="emel" class="form-control input-md" >
								</div>
							</div>

							<!-- Text input-->
								<div class="form-group">
									<label class="col-md-4 control-label">NOMBOR TELEFON</label>
									<div class="col-md-6">
									<input  name="notelefon" type="text" placeholder="nombor telefon" class="form-control input-md" maxlength="11" >
									</div>
								</div>

							<div class="form-group">
								<label class="col-md-4 control-label" >ALAMAT</label>
									<div class="col-md-6">
								<textarea placeholder="alamat" rows="3" type="text" name="alamat" class="form-control" ></textarea>
							  </div>
							</div>

							<div class="form-group">
								<label class="col-md-4 control-label" >BANDAR</label>
								<div class="col-md-6">
								<input name="bandar" type="text" placeholder="bandar" class="form-control input-md" >

								</div>
							</div>

							<div class="form-group">
								<label class="col-md-4 control-label">NEGERI</label>
								<div class="col-md-6">
								<select class="form-control" name="negeri" required="">
									<option></option>
									<?php
										$sql = "SELECT * FROM kospenghantaran";
										$result = $conn->query($sql);
										while($row = $result->fetch_assoc()){
									?>
									<option><?php echo $row['negeri']; ?></option>
									<?php
									}
									?>
								</select>
								</div>
							</div>

							<div class="form-group">
								<label class="col-md-4 control-label" >POSKOD</label>
								<div class="col-md-2">
								<input name="poskod" type="text" placeholder="poskod" class="form-control input-md" maxlength="5">

								</div>
							</div>

							<!-- Multiple Radios (inline) -->
							<div class="form-group">
								<label class="col-md-4 control-label">JANTINA</label>
								<div class="col-md-6">
									<label class="radio-inline" for="gender-0">
										<input type="radio" name="jantina" id="gender-0" value="lelaki" checked="checked">
										Lelaki
									</label>
									<label class="radio-inline" for="gender-1">
										<input type="radio" name="jantina" id="gender-1" value="perempuan">
										Perempuan
									</label>
								</div>
							</div><br>

							<div class="form-group">
								<label class="col-md-4 control-label">KAPTCHA</label>
								<div class="col-md-4">
									<img id="captcha" src="inc/securimage/securimage_show.php" alt="CAPTCHA Image" /><br><br>
									<input type="text" class="form-control input-md" name="captcha" size="10" maxlength="6" placeholder="Sila masukkan kod kaptcha" />
									<a href="#" onclick="document.getElementById('captcha').src = 'inc/securimage/securimage_show.php?' + Math.random(); return false">[Gambar Lain]</a>
								</div>
							</div>

							<!-- Button -->
							<div class="form-group">
							  <label class="col-md-4 control-label" for=""></label>
							  <div class="col-md-5">
								<button type="submit" class="btn btn-success btn-block"><b>HANTAR</b></button>
							  </div>
							</div>

							</fieldset>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
<script src="inc/register.js"></script>
