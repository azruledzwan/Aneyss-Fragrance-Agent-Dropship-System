<?php
if (isset($_POST['tahun'])) {
	$tahun = $_POST['tahun'];
}else {
	$tahun = date('Y');
}
?>

	<div class="row" >
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading text-center">
				<h5><b>PERATUSAN JUALAN <?php echo $nama; ?> BAGI TAHUN <?php echo $tahun; ?></b></h5>
				</div>
				<div class="panel-body"><br>
					<div class="row">
						<div class="col-md-3 col-md-offset-9">
							<form class="form" method="post" action="index.php?menu=grafejen">
								<div class="input-group date" data-provide="datepicker">
									<input type="number" class="form-control" value="<?php echo $tahun; ?>" name="tahun">
									<div class="input-group-addon">
										<span class="glyphicon glyphicon-calendar"></span>
									</div>
									<span class="input-group-btn">
										<button class="btn btn-default" type="submit">Papar</button>
									</span>
								</div>
							</form>
						</div>
					</div>
						<div class="table-responsive"><br>
									<table class="table table-bordered table-list-search text-center" style="font-size: 12px">
										<thead>
											<tr style="font-size: 13px" class="text-center">
												<?php
												$senaraibulan = array(1=>'JAN', 2=>'FEB', 3=>'MAR', 4=>'APR', 5=>'MEI', 6=>'JUN', 7=>'JUL', 8=>'OGO', 9=>'SEP', 10=>'OKT', 11=>'NOV', 12=>'DIS');
												foreach($senaraibulan as $nomborbulan => $namabulan) {
													?>
													<th style="width:100px"><?php echo $namabulan; ?></th>
													<?php
												}
												 ?>
												 <th style="background-color: black; color: white">JUMLAH</th>
											</tr>
										</thead>
										<tbody>
											<tr>
											<?php
											$tambahsemua = 0;
											foreach($senaraibulan as $nomborbulan => $namabulan){
												$sql = "SELECT * FROM belian
														JOIN detailbelian ON belian.idbelian = detailbelian.belian
														JOIN produk ON detailbelian.produk = produk.idproduk
														JOIN pelanggan ON belian.pelanggan = pelanggan.idpelanggan
														WHERE MONTH(tarikhbeli) = $nomborbulan AND YEAR(tarikhbeli) = $tahun AND belian.pelanggan = $idpelanggan ";
												$result = $conn->query($sql);
												$jumlahsemua = 0;
												$jumlahperatus = 0;
												while ($row = $result->fetch_assoc()) {
													$isipadu = $row['isipadu'];
													$level = $row['level'];
													$levelisipadu = $level.$isipadu;
													$sql = "SELECT $levelisipadu AS harga FROM harga";
													$rowharga = $conn->query($sql)->fetch_assoc();
													$harga = $rowharga['harga'];
													$total = $harga * $row['kuantiti'];
													$jumlahsemua += $total;

													$peratus = $jumlahsemua / 10000 * 100;
													$jumlahperatus += $peratus;

												}
												?>
												 <td>RM<br><b><?php echo number_format($jumlahsemua,2);?></b></td>
												<?php
												$tambahsemua += $jumlahsemua;

												}
												 ?>
												 <td style="background-color: black; color: white">RM <?php echo number_format($tambahsemua,2);?></td>
										</tr>

									</tbody>

								</tbody>
									</table>
							<center> <a href="index.php?menu=utama" class="btn btn-info text">KEMBALI</a></center>
					</div>
				</div>
			</div>
		</div>
	</div>
<style>
.tooltip{
position:relative;
float:right;
}
.tooltip > .tooltip-inner {background-color: #eebf3f; padding:5px 15px; color:rgb(23,44,66); font-weight:bold; font-size:13px;}
.popOver + .tooltip > .tooltip-arrow {    border-left: 5px solid transparent; border-right: 5px solid transparent; border-top: 5px solid #eebf3f;}

section{
margin:140px auto;
height:1000px;
}
.progress{
border-radius:0;
overflow:visible;
}
.progress-bar{
 background:rgb(23,44,60);
-webkit-transition: width 1.5s ease-in-out;
transition: width 1.5s ease-in-out;
}
</style>
<script>
$(function () {
$('[data-toggle="tooltip"]').tooltip({trigger: 'manual'}).tooltip('show');
});

$( window ).scroll(function() {
// if($( window ).scrollTop() > 10){   scroll down abit and get the action
$(".progress-bar").each(function(){
	each_bar_width = $(this).attr('aria-valuenow');
	$(this).width(each_bar_width + '%');
});

//  }
});
</script>
