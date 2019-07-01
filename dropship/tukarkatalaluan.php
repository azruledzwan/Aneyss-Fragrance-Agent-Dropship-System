<div class="row" >
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading text-center">
						 <h5><b>TUKAR KATALALUAN</b></h5>
					</div>
			<div class="panel-body text-center" >
				<div class="col-md-12 " >
				      <form action="katalaluan-simpan.php" method="post" class="form-horizontal form-left" >
							<fieldset><br>
								<div class="form-group">
									<label class="col-md-4 control-label">KATALALUAN ASAL</label>
									<div class="col-md-6">
										<input type="password" name="katalaluanasal" class="form-control input-md" >
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-4 control-label" >KATALALUAN BARU</label>
									<div class="col-md-6">
										<input type="password" name="katalaluanbaru" class="form-control input-md">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-4 control-label">ULANG KATALALUAN</label>
									<div class="col-md-6">
										<input type="password" name="katalaluanulang" class="form-control input-md" >
									</div>
								</div>

								<div class="form-group">
								<label class="col-md-4 control-label" ></label>
								<div class="col-md-12 text-center">
								<button type="submit" class="btn btn-primary"><b>HANTAR</b></button>
								<button type="reset" onclick="window.location='index.php?menu=tukarkatalaluan';" class="btn btn-primary"><b>BATAL</b></button>
								</div>
							</div>

							</fieldset>
						</form>

				   </div>
			</div>
		</div>
	</div>
</div>
	  <script src="../inc/katalaluan.js"></script>
