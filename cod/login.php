<style>
		p.required {
	font-size: 11px;
	text-align: right;
	color: #EB340A }
</style>
	<div class="row" >
		<div class="col-md-12">
			<div class="panel panel-warning">
					<div class="panel-heading text-center">
						<h5><b>WELCOME BACK! PLEASE SIGN IN</b></h5> 
					</div>
				
				<div class="panel-body">
					<div class="col-md-8 col-md-offset-2">
						<h5 class="text-center">If you have an account with us, please log in.</h5><br>
						<form class="form form-group" role="form" method="post" action="login-sahkan.php" accept-charset="UTF-8">
							 <div class="form-group">
								 <label>USERNAME</label>
								 <input type="text" class="form-control" id="idpengguna" name="idpengguna"   title="Please enter you username" style="height: 40px">
								 <span class="help-block"></span>
							 </div>
							 <div class="form-group">
								 <label>PASSWORD</label>
								 <input type="password" class="form-control" id="katalaluan" name="katalaluan"  title="Please enter your password"  style="height: 40px">
								 <span class="help-block"></span>
							 </div>
							 <div id="loginErrorMsg" class="alert alert-error hide">Wrong username or password</div>
							 <a href="index.php?menu=forgotpassword" class="forgot-link" style="font-size: 12px">Forgot Your Password?</a>
														   <p class="required" style="float: right">* Required Fields</p><br>
							 <button type="submit" class="btn btn-success btn-block" style="height: 40px"><b>LOGIN</b></button>
														   <center><a href="index.php?menu=register" style="font-size: 12px">Register for an account?</a></center><br><br>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<script src="inc/login.js"></script>	
