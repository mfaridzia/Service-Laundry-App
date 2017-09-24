<?php $this->load->view('template/header'); ?>
<?php $this->load->view('template/menu'); ?>

<div id="content" class="col-md-10 col-xs-8 col-sm-9">

				<div id="panel" class="panel panel-info">
					<div class="panel-heading"> 
						<h3 class="panel-title"> 
						<span class="glyphicon glyphicon-user"></span>
						Tambah Data Transaksi
						</h3>
					 </div>
					 <div class="panel-body">

					 	<form action="<?=base_url();?>rinctransaksi/proses_tambah" method="post">
					 		<table width="80%">
					 			<tr>
					 				<td> No Transaksi </td>
					 				<td>:</td>
					 				<td> 
					 					<select name="notransaksi" class="form-control" required>
					 						<?php
					 						 foreach($trans as $t) {
	                                           echo "<option value='".$t->notransaksi."'>".$t->notransaksi."</option>";
								            }
					 						?>
					 					</select>
					 				</td>
					 			</tr>
					 				<tr>
					 					<td>&nbsp;</td>
					 				</tr>
					 			<tr>
					 				<td> Jumlah </td>
					 				<td>:</td>
					 				<td> <input type="number" name="jumlah" class="form-control" required> </td>
					 			</tr>
					 			<tr>
					 				<td> ID Jenis Pakaian </td>
					 				<td>:</td>
					 				<td> 
					 					<select name="idjenispakaian" class="form-control" required>
					 						<?php
					 						foreach($tarif as $trf) {
	                                           echo "<option value='".$trf->idjenispakaian."'>".$trf->nmpakaian."</option>";
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

<?php $this->load->view('template/header'); ?>