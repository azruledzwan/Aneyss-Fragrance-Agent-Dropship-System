	<div class="row">
		<div class="col-xs-12">
		    <ul class="nav nav-pills nav-justified thumbnail">
			<li><a>
			    <h4 class="list-group-item-heading">Langkah 1</h4>
			    <p class="list-group-item-text">Bakul Belian</p>
			</a></li>
			<li ><a>
			    <h4 class="list-group-item-heading">Langkah 2</h4>
			    <p class="list-group-item-text">Sahkan Alamat</p>
			</a></li>
			<li class="active"><a>
			    <h4 class="list-group-item-heading">Langkah 3</h4>
			    <p class="list-group-item-text">Sahkan Pembayaran</p>
			</a></li>
		    </ul>
		</div>
	</div>
	<div class="panel panel-warning">
		<div class="panel-heading text-center">
			<h5><b>Confirm Payment</b></h5> 
		</div>
		<div class="panel-body">
			<div class="table-responsive">	
				<table class="table table-bordered">
					<tbody>
						<tr>
							<th>Barang</th>
							<th>Kuantiti</th>
							<th>Harga/unit</th>
							<th>Jumlah Harga</th>
						</tr>
						
						<tr>
							<td>One million by aneys fragrance 30ml</td>
							<td>2</td>
							<td>RM 50.00</td>
							<td>RM 100.00</td>
						</tr>
						<tr>
							<th colspan="3"><span class="pull-right">Caj Penghantaran</span></th>
							<th>RM 10.00</th>
						</tr>
						
						<tr>
							<th colspan="3"><span class="pull-right">Jumlah (Termasuk GST 6%)</span></th>
							<th>RM 110.00</th>
						</tr>
					</tbody>
				</table>          
			</div>
		</div>
	</div>


	<div class="panel-group" id="accordion">
		<div class="panel panel-warning">
		  <div class="panel-heading">
			<h4 class="panel-title">
			  <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Pembayaran secara manual</a>
			</h4>
		  </div>
			<div id="collapse1" class="panel-collapse collapse in">
				<div class="panel-body">
					<form method="post" action="#">
						<span class="glyphicon glyphicon-ok-sign"></span> Use Internet Banking or ATM to transnfer the payment amount to our Bank Accounts<br><br>
					<span class="glyphicon glyphicon-ok-sign"></span> After the transfer, please take a photo of the reciept or screenshot and upload it so we can comfirm receipt of your payment. please be informed that it may take up to 3 working days for payment confirmation depending on bank's processing time<br><br>
					
					<img class="img-responsive col-md-8" src="img/maybank.png" style="width: 150px;height: 100px">
					<b>Maybank</b><br><br>
					<p>Account Name : Aneyss Fragrance Enterprise<br>
					Account Number : 453654346286</p><br><br>
					<center><div class="col-md-12">
						<div class="input-group" >
						<!-- image-preview-filename input [CUT FROM HERE]-->
							<div class="input-group image-preview">
								<input type="text" class="form-control image-preview-filename" disabled="disabled"> <!-- don't give a name === doesn't send on POST/GET -->
								<span class="input-group-btn">
								<!-- image-preview-clear button -->
								<button type="button" class="btn btn-default image-preview-clear" style="display:none;">
									<span class="glyphicon glyphicon-remove"></span> Clear
								</button>
								<!-- image-preview-input -->
								<div class="btn btn-default image-preview-input">
									<span class="glyphicon glyphicon-folder-open"></span>
									<span class="image-preview-input-title">Browse</span>
									<input type="file" accept="image/png, image/jpeg, image/gif" name="file"/> <!-- rename it -->
								</div>
								</span>
							</div><!-- /input-group image-preview [TO HERE]-->
															
						</div></center><br><br><br>
						<p style="font-style: italic">*Upload a photo of your receipt from ATM or a screenshot of your receipt from Internet Banking.
						We will verify your payment within 3 working days.</p>
						<img id='img-upload'/>
					</div><br>
					<div class="col-md-12">
						<button type="submit" class="btn btn-primary btn-block">SUBMIT</button>
					</div><br><br><br>
					</form>
				</div>
			</div>
		</div>
		
		<div class="panel panel-warning">
			<div class="panel-heading">
				<h4 class="panel-title">
				  <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Online Banking</a>
				</h4>
			</div>
			<div id="collapse2" class="panel-collapse collapse">
				<div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
				sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
				</div>
			</div>
		</div>
	</div>
	  <script src="inc/upload.js"></script>
	  <script src="inc/delete.js"></script>