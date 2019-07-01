	<div class="row">
		<div class="col-md-4">
			<div class="panel panel-default">
				<div class="panel-heading text-center">
					 <h5><b>TAMBAH AROMA BAHARU</b></h5>
				</div>
				<div class="panel-body"><br>
				<?php
					if(!isset($_GET['edit'])){
						?>
					<form action="aroma-simpan.php" method="post" class="form-horizontal">
						<input type="hidden" name="idaroma" value="0">
						<div class="form-group">
							<label class="col-md-4 control-label">AROMA</label>
							<div class="col-md-8">
								<input name="aroma" type="text" placeholder="aroma" class="form-control input-md" >
							</div>
						</div>
						<br><div class="form-group">
							<div class="col-md-12 text-center">
								<button type="submit" class="btn btn-primary"><b>HANTAR</b></button>
								<button type="reset" onclick="window.location='index.php?menu=daftararoma';" class="btn btn-primary"><b>BATAL</b></button>
							</div>
						</div>
					</form>
					<?php
					}else{
						$idaroma = $conn->real_escape_string($_GET['edit']);
						$sql = "SELECT * FROM aroma WHERE idaroma = $idaroma";
						$row = $conn->query($sql)->fetch_assoc();
					?>
					<form action="aroma-simpan.php" method="post" class="form-horizontal">
						<input type="hidden" name="idaroma" value="<?php echo $idaroma; ?>">
						<div class="form-group">
							<label class="col-md-4 control-label">AROMA</label>
							<div class="col-md-8">
								<input name="aroma" type="text" placeholder="aroma" class="form-control input-md" value="<?php echo $row['aroma']; ?>">
							</div>
						</div>
						<br><div class="form-group">
							<div class="col-md-12 text-center">
								<button type="submit" class="btn btn-primary"><b>HANTAR</b></button>
								<button type="reset" onclick="window.location='index.php?menu=daftararoma';" class="btn btn-primary"><b>BATAL</b></button>
							</div>
						</div>
					</form>
					    <?php
					}
					?>
				</div>
			</div>
		</div>
		<div class="col-md-8">
			<div class="panel panel-default">
				<div class="panel-heading text-center">
					 <h5><b>SENARAI AROMA</b></h5>
				</div>
				<div class="panel-body"><br>
					<div class="table-responsive">
						<table class="table table-hover table-list-search">
							<thead>
								<tr>
									<th>BIL</th>
									<th>AROMA</th>
									<th>TINDAKAN</th>
								</tr>
							</thead>
							<tbody>
									<?php
								$bil = 1;
								$sql = "SELECT * FROM aroma";
								$result = $conn->query($sql);
								while($row = $result->fetch_assoc()){
									?>
								<tr>
									<td><?php echo $bil++; ?></td>
									<td><?php echo $row['aroma']; ?></td>
									<td>
									<a href="aroma-padam.php?idaroma=<?php echo $row['idaroma']; ?>"><img src="../img/delete.png" style="width: 32px" title="Padam" onclick="return sahkan('padam')"></a>
									<a href="index.php?menu=daftararoma&edit=<?php echo $row['idaroma']; ?>"><img src="../img/update.png" style="width: 30px" title="Kemaskini" ></a>
									</td>
								</tr>
							<?php
						}
						?>
						</tbody>
						</table>
							<!--<div class="row text-center">
								<ul class="pagination pagination">
									<li><a href="#">1</a></li>
									<li><a href="#">2</a></li>
								</ul>
							</div>-->
					</div>
				</div>
			</div>
		</div>
	</div>
<script src="../inc/tindakan.js"></script>
<script src="../inc/produk.js"></script>
