<?php $this->load->view('template/header'); ?>
<?php $this->load->view('template/menu'); ?>

<div id="content" class="col-md-10 col-xs-8 col-sm-9">

				<div id="panel" class="panel panel-info">
					<div class="panel-heading"> 
						<h3 class="panel-title"> 
						<span class="glyphicon glyphicon-user"></span>
						Edit Data Transaksi
						</h3>
					 </div>
					 <div class="panel-body">
					 	
					 	<form action="<?=base_url();?>transaksi/proses_edit" method="post">
					 		<table width="80%">
                                <tr>
					 				<td> No Transaksi </td>
					 				<td>:</td>
<td> <input type="text" name="notransaksi" value="<?= $transaksi->notransaksi; ?>" class="form-control" readonly> </td>
					 			</tr>
					 			<tr>
					 				<td> Tgl Transaksi </td>
					 				<td>:</td>
<td> <input type="date" name="tgltransaksi" value="<?= $transaksi->tgltransaksi; ?>" class="form-control" required> </td>
					 			</tr>
					 			<tr>
					 				<td> Tgl Ambil </td>
					 				<td>:</td>
<td> <input type="date" name="tglambil" value="<?= $transaksi->tglambil; ?>" class="form-control" required> </td>
					 			</tr>
					 			<tr>
					 				<td> Diskon </td>
					 				<td>:</td>
<td> <input type="text" name="diskon" value="<?= $transaksi->diskon; ?>" class="form-control" required> </td>
					 			</tr>
					 			<tr>
					 				<td> Kode Konsumen </td>
					 				<td>:</td>
					 				<td> 
					 					<select name="kodekonsumen" class="form-control" required>
                <?php
                        foreach($kodekon as $a) {    
                            if($a->kodekonsumen==$transaksi->kodekonsumen) {
                            echo "<option value='".$a->kodekonsumen."' selected>".$a->nmkonsumen."</option>";
                            } else {
                            echo "<option value='".$a->kodekonsumen."'>".$a->nmkonsumen."</option>";
                            }                     
                        }
				?>
					 					</select>
					 				</td>
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