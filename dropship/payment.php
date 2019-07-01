	<div class="row" >
			<div class="row bs-wizard" style="border-bottom:0; margin-top: 0px;margin-left: 18%">
				<div class="col-xs-3 bs-wizard-step complete">
				  <div class="text-center bs-wizard-stepnum">Cart</div>
				  <div class="progress"><div class="progress-bar"></div></div>
				  <a href="index.php?menu=cart" class="bs-wizard-dot"></a>
				</div>
				
				<div class="col-xs-3 bs-wizard-step complete"><!-- complete -->
				  <div class="text-center bs-wizard-stepnum">Confirmation</div>
				  <div class="progress"><div class="progress-bar"></div></div>
				  <a href="index.php?menu=confirmation" class="bs-wizard-dot"></a>

				</div>
				
				<div class="col-xs-3 bs-wizard-step complete"><!-- complete -->
				  <div class="text-center bs-wizard-stepnum">Payment</div>
				  <div class="progress"><div class="progress-bar"></div></div>
				  <a href="index.php?menu=payment" class="bs-wizard-dot"></a>

				</div>
			</div>
		<div class="col-md-12">
			<div class="panel panel-default">  
				<div class="panel-body text-left">
					<table class="table">
						<tr>
							<td>
							<b style="font-size: 15px">Total Payment : </b><b style="color: red;font-size: 15px;float: right">RM 20.30</b>
							</td>
						</tr>
						<tr>
							<td>
							</td>
						</tr>
						
					</table>
					<div id="accordion" class="panel-group">
						<div class="panel panel-default">
							 <div class="panel-heading">
							<h4 class="panel-title text-left">
							    <a data-toggle="collapse" data-parent="#accordion" href="#collapse2"><b>ATM / Bank Transfer<span style="float: right" class="glyphicon glyphicon-ok-sign"></span></b></a>
							</h4>
						    </div>
						    <div id="collapse2" class="panel-collapse collapse-in">
							<div class="panel-body">
							    <span class="glyphicon glyphicon-ok-sign"></span>Use Internet Banking or ATM to transnfer the payment amount to our Bank Accounts<br><br>
							    <span class="glyphicon glyphicon-ok-sign"></span>After the transfer, please take a photo of the reciept or screenshot and upload it so we can comfirm receipt of your payment. please be informed that it may take up to 3 working days for payment confirmation depending on bank's processing time<br><br>
							    
							    <img class="img-responsive col-md-8" src="../img/maybank.png" style="width: 150px;height: 100px">
							    <b>Maybank</b><br><br>
							    <p>Account Name : Aneyss Fragrance Enterprise<br>
							    Account Number : 453654346286</p><br><br>
							    <hr>
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
											    <input type="file" accept="image/png, image/jpeg, image/gif" name="input-file-preview"/> <!-- rename it -->
											</div>
										    </span>
										</div><!-- /input-group image-preview [TO HERE]-->								
									</div></center><br><br><br>
									<p style="font-style: italic">*Upload a photo of your receipt from ATM or a screenshot of your receipt from Internet Banking.
									We will verify your payment within 3 working days.</p>
									<img id='img-upload'/>
								</div><br>
							</div>
							<hr>
							<div class="col-md-12">
								<button class="btn btn-success btn-block">Submit</button>
								<button class="btn btn-danger btn-block" onclick="window.location='index.php?menu=purchase';">Upload later</button><br>
							</div>
						    </div>
						    
						<div class="panel panel-default">
							<div class="panel-heading">
							     <h4 class="panel-title text-left">
								 <a data-toggle="collapse" data-parent="#accordion" href="#collapse1"><b>Credit / Debit Card<span style="float: right" class="glyphicon glyphicon-ok-sign"></span></b></a>
							     </h4>
							</div>
							
							<div id="collapse1" class="panel-collapse collapse">
								<div class="panel-body">
									<!-- Name -->
									<div class="form-group">
									    <label class="control-label" for="cardname">Card Holder's Name</label>
										<input type="text" id="cardname" name="cardname" placeholder="" class="form-control">
									</div>
						
									<!-- Card Number -->
									<div class="form-group">
									    <label class="control-label" for="card_number">Card Number</label>
										<input type="text" id="card_number" name="card_number" placeholder=""
										       class="form-control">
									</div>
									
									<div class="row">
										<div class="col-sm-3">
											<div class="form-group">
											    <label class="control-label" for="expiry_date">Card Type</label>
											    <img src="../img/card.jpg" class="img-responsive" style="width: 110px;height: 40px; border-radius: 5px">
											</div>
											<!-- Expiry-->
											<div class="form-group">
											    <label class="control-label" for="expiry_date">Card Expiry Date</label>
												<input type="text" name="expiry_date" id="expiry_date" class="form-control" required="">
											</div>
											<!-- CVV -->
											<div class="form-group">
											    <label class="control-label" for="cardpass">Card CVV</label>
											    <input type="cardpass" id="cardpass"
												   name="cardpass" placeholder=""
												   class="form-control">
											</div>
										</div>    
									</div>
									<hr>
									<div class="row">
									    <div class="col-sm-12">
										<!-- Submit -->
										<div class="form-group">
										    <button class="btn btn-success btn-block">Submit</button>
										</div>
									    </div>
									    <div class="col-sm-4"></div>
									</div>
							        </div>
							</div>
						</div>
					</div>   
				</div>
			</div>
		</div>
	</div>
	
	
