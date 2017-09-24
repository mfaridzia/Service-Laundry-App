<?php $this->load->view('template/header'); ?>
<?php $this->load->view('template/menu'); ?>

<div id="content" class="col-md-10 col-xs-8 col-sm-9">

				<div id="panel" class="panel panel-info">
					<div class="panel-heading"> 
						<h3 class="panel-title"> 
						<span class="glyphicon glyphicon-user"></span>
						Edit Data Barang
						</h3>
					 </div>
					 <div class="panel-body">
					 	
					 	<form action="<?=base_url();?>barang/proses_edit" method="post">
					 		<table width="80%">
					 			<tr>
					 				<td> Kode Barang </td>
					 				<td>:</td>
    <td> <input type="text" name="kodebarang" class="form-control" value="<?= $brg->kodebarang; ?>" readonly required> </td>
					 			</tr>
					 			<tr>
					 				<td> Nama Barang </td>
					 				<td>:</td>
				<td> <input type="text" name="nmbarang" value="<?= $brg->nmbarang; ?>" class="form-control" required> </td>
					 			</tr>
					 			<tr>
					 				<td> Stok Barang</td>
					 				<td>:</td>
					 				<td> <input type="number" name="stok" value="<?= $brg->stok; ?>" class="form-control" required> </td>
					 			</tr>
					 			<tr>
					 				<td> Tgl Update Stok </td>
					 				<td>:</td>
<td> <input type="date" name="tglupdatestok" value="<?= $brg->tglupdatestok; ?>" class="form-control" required> </td>
					 			</tr>
					 	
					 			<tr>
					 				<td></td>
					 				<td></td>
					 				<td>
					 					<input id="btnn" class="btn btn-success" type="submit" name="update" value="Update">
					 				 </td>
					 			</tr>
					 		</table>
					 	</form>

					 </div>
				</div>

			</div> <!-- end content -->

<?php $this->load->view('template/footer'); ?>