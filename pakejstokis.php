<div class="row" >
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading text-center">
				<h5><b>SILA PILIH PAKEJ STOKIS</b></h5>
			</div>
			<div class="panel-body">
				<?php
			$bil = 1;
			$sql = "SELECT * FROM pakej WHERE kategori = 'stokis'";
			$result = $conn->query($sql);
			while($row = $result->fetch_assoc()){
				?>
				<form  method="post"  action="index.php?menu=daftarstokis">
						<input type="hidden" name="idpakej" value="<?php echo $row['idpakej']; ?>">
						<div class="col-md-4">
							<span class="thumbnail">
								<img src="gambarpakej.php?idpakej=<?php echo $row['idpakej']; ?>" style="height: 250px; width: 400px">
								<h5 class="product_name text-center">PAKEJ RM <?php echo $row['harga']; ?>.00</h5>
								<div class="row">
									<div class="form-group">
										<label class="col-md-4 control-label" for=""></label>
										<div class="col-md-12">
										  <button id="" name="" class="btn btn-warning btn-block"><b>Pilih</b></button>
										</div>
									</div>
								</div>
							</span>
						</div>
				</form>
				<?php
					}
					?>
			</div>
		</div>
	</div>
</div>

	</div>
