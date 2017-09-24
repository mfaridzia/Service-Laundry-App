<?php $this->load->view('template/header'); ?>
<?php $this->load->view('template/menu'); ?>

<div id="content" class="col-md-10 col-xs-8 col-sm-9">

				<div id="panel" class="panel panel-info">
					<div class="panel-heading"> 
						<h3 class="panel-title"> 
						<span class="glyphicon glyphicon-user"></span>
						Edit Data Supplier
						</h3>
					 </div>
					 <div class="panel-body">
					 	
					 	<form action="<?=base_url();?>supplier/proses_edit" method="post">
					 		<table width="80%">
					 			<tr>
					 				<td> ID Supplier </td>
					 				<td>:</td>
<td> <input type="text" name="idsupplier" value="<?=$supplier->idsupplier;?>" readonly class="form-control" required> </td>
					 			</tr>
					 			<tr>
					 				<td> Nama Supplier </td>
					 				<td>:</td>
<td> <input type="text" name="nmsupplier" value="<?=$supplier->nmsupplier;?>" class="form-control" required> </td>
					 			</tr>
					 			<tr>
					 				<td> Alamat Supplier</td>
					 				<td>:</td>
<td> <input type="text" name="almtsupplier" value="<?=$supplier->almtsupplier;?>" class="form-control" required> </td>
					 			</tr>
					 			<tr>
					 				<td> Telp Supplier </td>
					 				<td>:</td>
<td> <input type="text" name="telpsupplier" value="<?=$supplier->telpsupplier;?>" class="form-control" required> </td>
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