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
	<body>
			<div class="container" style="width:1000px">
						 <center>
							<p style="font-size: 16px">
								<b>ANEYSS FRAGRANCE ENTERPRISE</b><br>
							 	  <br>
								Facebook: aneyssfragrance | Instagram: feezaahijab<br>
								<b>0134572402 (Pn Hafizah) | 0134572402 (En. Zulhairy)</b>

							</p>
								<hr>
						 </center>
						 <p style="font-size: 25px"><b>INVOIS</b></p>
						 <p style="float:left;font-size:15px">
							  NAMA : <b><?php echo $nama; ?></b>
						 </p>
						 <p style="float:right;font-size:15px">
								NO INVOIS : <b>AF<?php echo $noresit; ?></b> |
								TARIKH : <b><?php echo tarikh($tarikh); ?></b><br>
						</p><br>
							<center><table class="tbl_senarai" style="width:1000px;font-size: 13px">
								<thead>
									<tr>
										<th>NAMA PRODUK</th>
										<th style="width:100px; height: 40px">KUANTITI</th>
										<th style="width:100px">HARGA/UNIT</th>
										<th style="width:100px">JUMLAH</th>
									</tr>
								</thead>
								<tbody>
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
										$harga = $rowharga['dropship'.$row['isipadu']];
										$jumlahharga = $harga * $row['kuantiti'];
										$totalharga += $jumlahharga;
										?>
									<tr>
										<td style="height: 40px"><?php echo $row['namaproduk']; ?></td>
										<td style="height: 40px"><?php echo $row['kuantiti']; ?></td>
										<td style="height: 40px">RM <?php echo $harga; ?></td>
										<td style="height: 40px">RM <?php echo $jumlahharga;?>.00</td>
									</tr>
									<?php
								}
								//$totalharga += $cas;
								?>

									<tr>
										<th colspan="3" style="height: 40px"><span style="float:right">JUMLAH ( TERMASUK GTS 6%)&nbsp</span></th>
										<th style="height: 40px">RM <?php echo $totalharga;?>.00</th>
									</tr>
								</tbody>
				 </table>
			 </center>
				<div class="sorok"><br>
					<button onclick="print()" type="button" class="btn btn-default btn-sm">CETAK INVOIS</button>
					<button onclick="window.location='resit.php';" type="button" class="btn btn-default btn-sm">CETAK RESIT</button>
					<button onclick="window.location='index.php?menu=bakulbelian';" type="button" class="btn btn-default btn-sm">KEMBALI</button>
					<button onclick="window.location='selesai.php';" type="button" class="btn btn-default btn-sm">SELESAI</button>

				</div>
				</div>
			</div>
	</body>
</html>
