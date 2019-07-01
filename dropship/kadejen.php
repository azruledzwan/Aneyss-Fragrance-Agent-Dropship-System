<?php
require('../inc/conn.php');
$idpelanggan = $_SESSION['idpelanggan'];
$sql="SELECT * FROM pelanggan WHERE idpelanggan = $idpelanggan";
$row = $conn->query($sql)->fetch_assoc();
$nokp = $row['nokp'];
$nama = $row['nama'];
?>
<head>
  <title>Aneyss Fragrance</title>
  	<script src="../inc/style-cetak.css"></script>
  <meta charset="utf-8">
  <link rel="stylesheet" media="screen" href="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
	<center>
    <p>
      <b>ANEYSS FRAGRANCE ENTERPRISE</b><br>
      25 Kampung Matang Bonglai Kecil 06150 Ayer Hitam Kedah Darul Aman<br>
      Facebook: aneyssfragrance | Instagram: feezaahijab<br>
      <b>0134572402 (Pn Hafizah) | 0134572402 (En. Zulhairy)</b>
    </p><br>
    <p style="color:red;">*Sila potong kad ahli mengikut ukuran yg diberikan 8.5cm x 5.5cm</p>
    <div class="container text-center">
      <center>
        <img src="../img/CARD.png" style="width: 8.5cm; height: 5.5cm">
      </center>
				<center>
  					<h3 class="barcode">
  					<?php
  					include('barcode128.php');
  					echo bar128(stripslashes($row['nokp']))
  					?>
				    </h3>
				</center>
        <center><p class="text"><b><?php echo $nama; ?></b></p></center>
	</div>

  <center>
    <div class="sorok">
    <button onclick="print()" type="button">Cetak</button>
    <button onclick="window.location='index.php?menu=kad';" type="button">Kembali</button>
  </div><br>
  </center>
  <div style="text-align: justify; width:430px">
      <center><p>TERMA DAN SYARAT</p><br></center>

  1. Untuk mendaftar sebagai ahli Aneyss Fragrance, anda mestilah tinggal di Malaysia dan berusia sekurang-kurangnya 18 tahun pada tarikh pendaftaran.<br><br>

  2. Setiap orang boleh mendaftar dan memiliki 1 Kad sahaja pada satu-satu masa.Kad keahlian ini tidak boleh dipindah milik & hanya boleh digunakan oleh pemilik yang sah.<br><br>

  3. kad ini hanya sah digunakan semasa pembelian Cash On delivery (COD) di cawangan aneyss fragrance sahaja<br><br>

  4. Tiada Mata Bonus akan diberikan jika<br> Kad Sementara atau Kad aneyss fragrance yang sah dikemukakan<br><br>

  5. pihak syarikat tidak akan bertanggungjawab atas akibat dan kehilangan kad keahlian anda.
  </div>
  </center>

<style>
	.container {
    text-align: center;
    font-family: Century Gothic,CenturyGothic,AppleGothic,sans-serif !important;
    font-size: 8px;
    color: white;
    width: 9.9cm;
    height: 6.5cm;
    position: relative;
    z-index: 0;
    border-style: dashed;

	}

  .sorok{
    text-align: center;
}
.barcode{
  background-color: white;
  width: 50%;
  height: 30%;
  margin-top: -78px;
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
