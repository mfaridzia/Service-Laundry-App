<?php $this->load->view('template/header'); ?>
<?php $this->load->view('template/menu'); ?>

<div id="content" class="col-md-10 col-xs-8 col-sm-9">

				<div id="panel" class="panel panel-info">
					<div class="panel-heading"> 
						<h3 class="panel-title"> 
						<span class="glyphicon glyphicon-user"></span>
						Tambah Data Konsumen
						</h3>
					 </div>
					 <div class="panel-body">
					 	
					 	<form action="<?=base_url();?>konsumen/proses_tambah" method="post">
					 		<table width="80%">
					 			<tr>
					 				<td> Kode Konsumen </td>
					 				<td>:</td>
					 				<td> <input type="text" name="kodekonsumen" class="form-control" required> </td>
					 			</tr>
					 			<tr>
					 				<td> Nama Konsumen </td>
					 				<td>:</td>
					 				<td> <input type="text" name="nmkonsumen" class="form-control" required> </td>
					 			</tr>
					 			<tr>
					 				<td> Alamat Konsumen</td>
					 				<td>:</td>
					 				<td> <input type="text" name="almtkonsumen" class="form-control" required> </td>
					 			</tr>
					 			<tr>
					 				<td> Telp Konsumen </td>
					 				<td>:</td>
					 				<td> <input type="text" name="telpkonsumen" class="form-control" required> </td>
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