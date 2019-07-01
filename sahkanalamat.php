	<div class="row">
		<div class="col-xs-12">
		    <ul class="nav nav-pills nav-justified thumbnail">
			<li><a>
			    <h4 class="list-group-item-heading">Langkah 1</h4>
			    <p class="list-group-item-text">Bakul Belian</p>
			</a></li>
			<li class="active"><a>
			    <h4 class="list-group-item-heading">Langkah 2</h4>
			    <p class="list-group-item-text">Sahkan Alamat</p>
			</a></li>
			<li class="disabled"><a>
			    <h4 class="list-group-item-heading">Langkah 3</h4>
			    <p class="list-group-item-text">Sahkan Pembayaran</p>
			</a></li>
		    </ul>
		</div>
	</div>
			<div class="panel panel-warning">
				<div class="panel-heading text-center">
					<h5><b>SAHKAN ALAMAT PENGHANTARAN</b></h5> 
				</div>
				<div class="panel-body">
					<form class="form-horizontal form-left" method="post" action="index.php?menu=confirmpayment" >
						<table class="table">
							<tr>
								<td>
								<fieldset><br>
									<!-- Text input-->
									<div class="form-group">
										<label class="col-md-4 control-label" for="fullname">NAMA PENUH</label>  
										<div class="col-md-6">
										<input id="fullname" name="fullname" type="text" class="form-control input-md" >
											
										</div>
									</div>
									
									<!-- Text input-->
										<div class="form-group">
											<label class="col-md-4 control-label" for="phone">NO. TELEFON</label>  
											<div class="col-md-6">
											<input  name="phone" type="text" class="form-control input-md" maxlength="11" onkeypress='return event.charCode >= 48 && event.charCode <= 57' >
												
											</div>
										</div>
										
									<div class="form-group">
										<label class="col-md-4 control-label" for="address">ALAMAT</label>  
											<div class="col-md-6">
										<textarea rows="3" type="text" name="alamat" class="form-control" ></textarea>
									  </div>
									</div>
									
									<div class="form-group">
										<label class="col-md-4 control-label" >BANDAR</label>  
										<div class="col-md-6">
										<input name="bandar" type="text" class="form-control input-md" >
											
										</div>
									</div>
									
									<div class="form-group">
										<label class="col-md-4 control-label">NEGERI</label>  
										<div class="col-md-6">
										<select class="form-control">
											<option value="">Sila pilih negeri</option>
											<option>Johor</option>
											<option>Kedah</option>
											<option>Kelantan</option>
											<option>Melaka</option>
											<option>Negeri Sembilan</option>
											<option>Pahang</option>
											<option>Perak</option>
											<option>Perlis</option>
											<option>Pulau Pinang</option>
											<option>Sabah</option>
											<option>Sarawak</option>
											<option>Selangor</option>
											</option>Terengganu</option>
											<option>Wilayah Persekutuan Kuala Lumpur</option>
											<option>Wilayah Persekutuan Labuan</option>
											<option>Wilayah Persekutuan Putrajaya</option>
										</select>
										</div>
									</div>
									
									<div class="form-group">
										<label class="col-md-4 control-label" >POSKOD</label>  
										<div class="col-md-2">
										<input name="poskod" type="text" class="form-control input-md" >
											
										</div>
									</div>
								</fieldset>
								</td>
							</tr>
							<tr>
								<td>
										<button type="submit" class="btn btn-warning btn-block" ><b>SUBMIT</b></button>
								</td>
							</tr>
						</table>
					</form>
				</div>
			</div>
	<script src="inc/delete.js"></script>
