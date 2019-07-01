
<div class="row" >
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading text-center">
			<h5><b>KAD KEAHLIAN <?php echo $nama; ?></b></h5>
			</div>
			<div class="panel-body"><br>
				<center>
					<div class="containers text-center">
					<center>
						<img src="../img/CARD.png" style="width: 8.5cm; height: 5.5cm">
					</center>
							<center>
									<h3 class="barcode1">
									<?php
									include('barcodes128.php');
									echo bar128(stripslashes($row['nokp']))
									?>
									</h3>
							</center>
							<center><p class="text"><b><?php echo $nama; ?></b></p></center>
				</div>
				</center>
					<center>
						<div class="sorok">
						<button class="btn btn-info" onclick="window.location='kadejen.php';" type="button">CETAK</button>
					</div>
					</center>

			</div>
		</div>
	</div>
</div>


<style>
	.containers {
    text-align: center;
    font-family: Century Gothic,CenturyGothic,AppleGothic,sans-serif !important;
    font-size: 8px;
    color: white;
    width: 9.9cm;
    height: 6.5cm;
    position: relative;
    z-index: 0;

	}

  .sorok{
    text-align: center;
}
.barcode1{
  background-color: white;
	color: black;
  width: 45%;
  height: 30%;
  margin-top: -85px;
  position: relative;
  margin-left: 128px;
  z-index: 0;

}
.text{
  color: black;
  width: 100%;
  font-size: 12px;
  margin-top: -110px;
  position: relative;
  margin-left: 60px;
  z-index: 0;

}

@media print{
    .sorok{
        display: none;
    }
}
</style>
