<?php
require('../../inc/conn.php');
$idpelanggan = $_SESSION['idpelanggan'];
$idbelian = $_SESSION['idbelian'];
$sql = "SELECT * FROM pelanggan WHERE idpelanggan = $idpelanggan";
$row = $conn->query($sql)->fetch_assoc();
$sql = "SELECT * FROM belian WHERE idbelian = $idbelian";
$row2 = $conn->query($sql)->fetch_assoc();
$nama = $row['nama'];
$level = $row['level'];
$noresit = $row2['idbelian'];
$tarikh = $row2['tarikhbeli'];
?>
<!DOCTYPE html>
<html lang="en">
	<head>

		<title>Aneyss Fragrance</title>
		<link rel="stylesheet" href="../../inc/style-cetak.css">

	</head>
	<style type="text/css">
	*{font-size:10px}

	.bold {
		font-weight: bold;
		font-family: Verdana;
	}
	.style1 {color: #FFCD40}

	.kertas{
	width:43mm;
	margin-bottom: 0px;
	}

	@media print {
		.sorok {
			display: none;
		}
	}

	body {
	height : inherit;
	width : 43mm;
	}

	</style>


	<html lang="en">


	<body onLoad="print();">
	<div class="kertas" align="left">

	<center>
	<div align="center">
	<h1><em><b>ANEYSS FRAGRANCE ENTERPRISE</b></em></h1>
	Facebook: aneyssfragrance<br>
	Instagram: feezaahijab<br><br>
	<b>0134572402 (Pn Hafizah)<br>
	0134572402 (En. Zulhairy)</b>
</div>
	</center>
	<hr>
	<center>
		<div>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


			<b>Tarikh:</b>
			<?php $today = date ("d M Y ");?>
			<?php echo $today ?><br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

			<b>Masa:</b>
			<?php
			date_default_timezone_set('Asia/Kuala_Lumpur');
			echo date("h:i:sa");

		?>
		</div>
	</center><br>
				 <table>
					 <thead>
					 <tr>
					 <td style="font-size:10px;">
						 Item
					 </td>
					 <td style="font-size:10px">
						 Qty
					 </td>
					 <td style="font-size:10px">
						 Price/unit
					 </td>
					 <td style="font-size:10px">
						 Total Price
					 </td>
				 </tr>
			 </thead>
	<?php
	$idbelian = $_SESSION['idbelian'];
	$sql = "SELECT * FROM pelanggan
		 JOIN kospenghantaran ON pelanggan.negeri = kospenghantaran.negeri
		 WHERE idpelanggan = '$idpelanggan'";
	$row=$conn->query($sql)->fetch_assoc();
	$negeri = $row['negeri'];
	$cas = $row['cas'];
	$sql = "SELECT * FROM harga";
	$rowharga=$conn->query($sql)->fetch_assoc();
	$bil = 1;
	$sql = "SELECT * FROM produk
		 JOIN detailbelian ON produk.idproduk = detailbelian.produk
		 WHERE detailbelian.belian = $idbelian";
	$result = $conn->query($sql);
	$totalharga = 0;
	while($row = $result->fetch_assoc()){
	 $harga = $rowharga['stokis'.$row['isipadu']];
	 $jumlahharga = $harga * $row['kuantiti'];
	 $totalharga += $jumlahharga;
	 //$onLoad="print();"
	 ?>
<tbody>
              <tr>
              <td style="font-size:10px">
								&nbsp;<?php echo $row['namaproduk']; ?>
							</td>
							<td style="font-size:10px">
								&nbsp;<?php echo $row['kuantiti']; ?>
							</td>
							<td style="font-size:10px">
								&nbsp;RM <?php echo $harga; ?>
							</td>
							<td style="font-size:10px">
								&nbsp;RM <?php echo $jumlahharga; ?>.00
							</td>
              </tr>
              <?php
	}
?>
</tbody>
</table>
<hr>
	<div align="right">
		Discount : 0.00<br>
		Service Charge : 0.00<br>
		Rounding : 0.00<br>
		<b>Total(Inclusive of GST) : RM <?php echo $totalharga;?>.00</b>
	</div>
<hr>
	<center>
	 *** ~ Thank You ~ ***
	</center>
</div>
	</body>
	</html>
