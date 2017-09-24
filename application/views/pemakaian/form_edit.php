<?php $this->load->view('template/header'); ?>
<?php $this->load->view('template/menu'); ?>

    <div id="content" class="col-md-10 col-xs-8 col-sm-9">

				<div id="panel" class="panel panel-info">
					<div class="panel-heading"> 
						<h3 class="panel-title"> 
						<span class="glyphicon glyphicon-user"></span>
						Edit Data Pemakaian Barang
						</h3>
					 </div>
					 <div class="panel-body">
                         
					 	<form action="<?=base_url();?>pemakaian/proses_edit" method="post">
					 		<table width="80%">
                                <tr>
					 				<td> Kode Pengeluaran </td>
					 				<td>:</td>
<td><input type="text" name="kodepengeluaran" value="<?= $pemakaian->kodepengeluaran; ?>" class="form-control" readonly></td>
					 			</tr>
					 			<tr>
					 				<td> Jumlah </td>
					 				<td>:</td>
     <td> <input type="number" name="jumlah" class="form-control" value="<?= $pemakaian->jumlah; ?>" required> </td>
					 			</tr>
					 			<tr>
					 				<td> Kode Barang</td>
					 				<td>:</td>
					 				<td> 
				<select name="kodebarang" class="form-control" required>     
				<?php
                        foreach($barang as $a) {    
                            if($a->kodebarang==$pemakaian->kodebarang) {
                            echo "<option value='".$a->kodebarang."' selected>".$a->nmbarang."</option>";
                            } else {
                            echo "<option value='".$a->kodebarang."'>".$a->nmbarang."</option>";
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
					 					<input id="btnn" class="btn btn-success" type="submit" name="update" value="Update">
					 				 </td>
					 			</tr>
					 		</table>
					 	</form>

					 </div>
				</div>

			</div> <!-- end content -->

<?php $this->load->view('template/footer'); ?>