<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading text-center">
				<h5><b>SENARAI PEKERJA</b></h5>
			</div>
			<div class="panel-body">
				<div class="table-responsive">
					<div class="col-md-12">
						<table class="table table-hover table-list-search">
							<thead>
								<tr>
									<th>BIL</th>
									<th>NAMA</th>
									<th>NO. KAD PENGENALAN</th>
									<th>JAWATAN</th>
									<th>TINDAKAN</th>
								</tr>
							</thead>
							<tbody>
								<?php
							$bil = 1;
							$sql = "SELECT * FROM pekerja";
							$result = $conn->query($sql);
							while($row = $result->fetch_assoc()){
								?>
								<tr style="display: table-row;">
									<td><?php echo $bil++; ?></td>
									<td><?php echo $row['nama']; ?></td>
									<td><?php echo $row['nokp']; ?></td>
									<td><?php echo $row['jawatan']; ?></td>
									<td>
									<a href="pekerja-padam.php?idpekerja=<?php echo $row['idpekerja']; ?>"><img src="../img/delete.png" style="width: 32px" title="Padam" onclick="return sahkan('padam')"></a>
									<a href="index.php?menu=daftarpekerja&edit=<?php echo $row['idpekerja']; ?>"><img src="../img/update.png" style="width: 30px" title="Kemaskini" ></a>
									<a href="pekerja-reset.php?idpekerja=<?php echo $row['idpekerja']; ?>"><img src="../img/refresh.png" style="width: 30px" title="Reset" onclick="return sahkan('reset')"></a>
									</td>
								</tr>
							 <?php
					}
					?>
					</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script src="../inc/tindakan.js"></script>
