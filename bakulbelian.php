	<div class="row">
		<div class="col-xs-12">
		    <ul class="nav nav-pills nav-justified thumbnail">
			<li class="active"><a>
			    <h4 class="list-group-item-heading">Langkah 1</h4>
			    <p class="list-group-item-text">Bakul Belian</p>
			</a></li>
			<li class="disabled"><a>
			    <h4 class="list-group-item-heading">Langkah 2</h4>
			    <p class="list-group-item-text">Sahkan Alamat</p>
			</a></li>
			<li class="disabled"><a>
			    <h4 class="list-group-item-heading">Langkah 3</h4>
			    <p class="list-group-item-text">Sahkan Pembayaran</p>
			</a></li>
		    </ul>
		</div>
	</div>
	<div class="panel panel-warning">
		<div class="panel-heading text-center">
			<h5><b>BAKUL BELIAN</b></h5> 
		</div>
		<div class="panel-body">
			<div class="table-responsive">	
				<table class="table table-bordered">
					<tbody>
					    <tr>
						<th>Barang</th>
						<th>Kuantiti</th>
						<th>Harga/unit</th>
						<th>Jumlah Harga</th>
						<th>Tindakan</th>
					    </tr>
					    <tr>
						<td>One million by aneys fragrance 30ml</td>
						<td><input type="number" style="width: 80px" class="form-control" value="1" min="1" max="1000" /></td>
						<td>RM 50.00</td>
						<td>RM 100.00</td>
						<td class="text-center">
						<a href="#"><img src="img/delete.png" style="width: 32px" title="Delete" onclick="return sahkan('padam')"></a>
						<a href="#"><img src="img/refresh.png" style="width: 30px" title="Refresh" ></a>
						</td>
					    </tr>
					    <tr>
						<th colspan="4"><span class="pull-right">Jumlah</span></th>
						<th>RM 100.00</th>
					    </tr>
					    <tr>
						<th colspan="4"><span class="pull-right">Jumlah (Termasuk GST 6%)</span></th>
						<th>RM 100.00</th>
					    </tr>
					</tbody>
				</table>
				<a href="index.php?menu=sahkanalamat" class="btn btn-warning btn-block"><b>CHECKOUT</b></a>
			</div>
		</div>
	</div>
<script src="inc/delete.js"></script>
