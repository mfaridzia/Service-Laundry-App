<?php $this->load->view('template/header'); ?>
<?php $this->load->view('template/menu'); ?>

	<div id="content" class="col-md-10 col-xs-8 col-sm-9">

				<div id="panel" class="panel panel-info">
					<div class="panel-heading"> 
						<h3 class="panel-title"> 
						<span class="glyphicon glyphicon-user"></span>
						Edit Data Jenis Laundry
						</h3>
					 </div>
					 <div class="panel-body">
                         
					 	<form action="<?=base_url();?>jendlaundry/proses_edit" method="post">
					 		<table width="80%">
                                <tr>
					 				<td> ID Jenis Laundry </td>
					 				<td>:</td>
<td> <input type="text" name="idjenislaundry" class="form-control" required readonly 
            value="<?= $jendlaundry->idjenislaundry;?>"> </td>
					 			</tr>
					 			<tr>
					 				<td> Nama Jenis Laundry </td>
					 				<td>:</td>
<td> <input type="text" name="nmjenislaundry" value="<?= $jendlaundry->nmjenislaundry;?>" class="form-control" required> </td>
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