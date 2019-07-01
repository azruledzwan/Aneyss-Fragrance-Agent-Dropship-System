	<div class="row" >
		<div class="col-md-12">
			<div class="panel panel-default" >
				<div class="panel-heading text-center" >
					<h5><b>UTAMA</b></h5>
				</div>
				<div class="panel-body text-center" >
					<div class="col-md-12" >
						<div class="col-md-3">
							<div class="panel panel-default">
								<div class="panel-heading">
									<div class="panel-title">
										<span><b>STAF</b></span>
									</div>
								</div>
								<div class="panel-body">
									<div class="row">
											<b style="font-size: 65px">
												<?php
												$sql = "SELECT COUNT(*) AS bil FROM pekerja WHERE jawatan = 'staf'";
												$row = $conn->query($sql)->fetch_assoc();
												echo $row['bil'];
												?>
											</b><br>
											<b>ORANG</b>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-3">
								<div class="panel panel-default" >
									<div class="panel-heading">
										<div class="panel-title">
											<span><b>PENGURUS</b></span>
										</div>
									</div>
									<div class="panel-body">
										<div class="row">
												<b style="font-size: 65px">
													<?php
												$sql = "SELECT COUNT(*) AS bil FROM pekerja WHERE jawatan = 'pengurus'";
												$row = $conn->query($sql)->fetch_assoc();
												echo $row['bil'];
												?>
												</b><br>
												<b>ORANG</b>
										</div>
									</div>
								</div>
						</div>

						<div class="col-md-3">
								<div class="panel panel-default">
									<div class="panel-heading">
										<div class="panel-title">
											<span><b>PRODUK</b></span>
										</div>
									</div>
									<div class="panel-body">
										<div class="row">
												<b style="font-size: 65px">
													<?php
												$sql = "SELECT COUNT(*) AS bil FROM produk";
												$row = $conn->query($sql)->fetch_assoc();
												echo $row['bil'];
												?>
												</b><br>
												<b>JENIS</b>
										</div>
									</div>
								</div>
							</div>

						<div class="col-md-3">
							<div class="panel panel-default">
								<div class="panel-heading">
									<div class="panel-title">
										<span><b>EJEN</b></span>
									</div>
								</div>
								<div class="panel-body">
									<div class="row">
											<b style="font-size: 65px">
												<?php
												$sql = "SELECT COUNT(*) AS bil FROM pelanggan WHERE level = 'stokis' OR level = 'dropship'";
												$row = $conn->query($sql)->fetch_assoc();
												echo $row['bil'];
												?>
											</b><br>
											<b>ORANG</b>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
