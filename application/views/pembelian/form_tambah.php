<?php $this->load->view('template/header'); ?>
<?php $this->load->view('template/menu'); ?>

<div id="content" class="col-md-10 col-xs-8 col-sm-9">

				<div id="panel" class="panel panel-info">
					<div class="panel-heading"> 
						<h3 class="panel-title"> 
						<span class="glyphicon glyphicon-user"></span>
						Tambah Data Pembelian
						</h3>
					 </div>
					 <div class="panel-body">
					 	
					 	<form action="<?=base_url();?>pembelian/proses_tambah" method="post">
					 		<table width="80%">
					 			<tr>
					 				<td> Tgl Pembelian </td>
					 				<td>:</td>
					 				<td> <input type="date" name="tglpembelian" class="form-control" required> </td>
					 			</tr>
					 			<tr>
					 				<td> Total Biaya </td>
					 				<td>:</td>
					 				<td> <input type="number" name="totalbiaya" class="form-control" required> </td>
					 			</tr>
					 			<tr>
					 				<td> ID Supplier</td>
					 				<td>:</td>
					 				<td> 
					 					<select name="idsupplier" class="form-control" required>
					 						<?php
					 						   foreach($ambil as $pemb) {
	echo "<option value='".$pemb->idsupplier."'>".$pemb->nmsupplier."</option>";
												}
					 						?>
					 					</select>
					 				</td>
					 			</tr>
					 	
					 			<tr>
					 				<td></td>
					 				<td></td>
					 				<td>
					 					<input id="btnn" class="btn btn-success" type="submit" name="simpan" value="Tambah">
					 				 </td>
					 			</tr>
					 		</table>
					 	</form>

					 </div>
				</div>

			</div> <!-- end content -->

<?php $this->load->view('template/footer'); ?>