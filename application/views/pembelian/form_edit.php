<?php $this->load->view('template/header'); ?>
<?php $this->load->view('template/menu'); ?>

<div id="content" class="col-md-10 col-xs-8 col-sm-9">

				<div id="panel" class="panel panel-info">
					<div class="panel-heading"> 
						<h3 class="panel-title"> 
						<span class="glyphicon glyphicon-user"></span>
						Edit Data Pembelian
						</h3>
					 </div>
					 <div class="panel-body">
					 	
					 	<form action="<?=base_url();?>pembelian/proses_edit" method="post">
					 		<table width="80%">
                                <tr>
					 				<td> No Pembelian </td>
					 				<td>:</td>
<td> <input type="text" name="nopembelian" class="form-control" required readonly value="<?= $pembelian->nopembelian; ?>"> </td>
					 			</tr>
					 			<tr>
					 				<td> Tgl Pembelian </td>
					 				<td>:</td>
 <td> <input type="date" name="tglpembelian" value="<?=$pembelian->tglpembelian; ?>" class="form-control" required> </td>
					 			</tr>
					 			<tr>
					 				<td> Total Biaya </td>
					 				<td>:</td>
<td> <input type="number" name="totalbiaya" value="<?=$pembelian->totalbiaya; ?>" class="form-control" required> </td>
					 			</tr>
					 			<tr>
					 				<td> ID Supplier</td>
					 				<td>:</td>
					 				<td> 
					 					<select name="idsupplier" class="form-control" required>
				<?php
                    foreach($supplier as $a) {    
                            if($a->idsupplier==$pembelian->idsupplier) {
                            echo "<option value='".$a->idsupplier."' selected>".$a->nmsupplier."</option>";
                            } else {
                            echo "<option value='".$a->idsupplier."'>".$a->nmsupplier."</option>";
                            }                     
                            //echo "<option value='".$a->kodebarang."'>".$a->nmbarang."</option>";
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