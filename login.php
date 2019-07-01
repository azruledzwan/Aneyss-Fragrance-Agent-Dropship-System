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
						<h5><b>LOG MASUK</b></h5>
					</div>

				<div class="panel-body">
					<div class="col-md-8 col-md-offset-2"><br>
						<form class="form form-group" role="form" method="post" action="login-sahkan.php" accept-charset="UTF-8">
							 <div class="form-group">
								 <label>IDPENGGUNA*</label>
								 <input type="text" class="form-control" id="idpengguna" name="idpengguna"   title="Please enter you username" style="height: 40px">
								 <span class="help-block"></span>
							 </div>
							 <div class="form-group">
								 <label>KATALALUAN*</label>
								 <input type="password" class="form-control" id="katalaluan" name="katalaluan"  title="Please enter your password"  style="height: 40px">
								 <span class="help-block"></span>
							 </div>
							 <a href="index.php?menu=lupakatalaluan" class="forgot-link" style="font-size: 12px">Lupa katalaluan?</a>
														   <p class="required" style="float: right">* Wajib isi</p><br>
							 <button type="submit" class="btn btn-success btn-block" style="height: 40px"><b>LOG MASUK</b></button>
														   <center><a href="index.php?menu=daftaruser" style="font-size: 12px">Daftar akaun?</a></center><br><br>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="inc/login.js"></script>
