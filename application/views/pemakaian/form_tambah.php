<?php $this->load->view('template/header'); ?>
<?php $this->load->view('template/menu'); ?>

    <div id="content" class="col-md-10 col-xs-8 col-sm-9">

				<div id="panel" class="panel panel-info">
					<div class="panel-heading"> 
						<h3 class="panel-title"> 
						<span class="glyphicon glyphicon-user"></span>
						Tambah Data Pemakaian Barang
						</h3>
					 </div>
					 <div class="panel-body">

					 
<!--
//					 		if(isset($_POST['simpan'])) {
//					 			$a = $_POST['jumlah'];
//					 			$b = $_POST['kodebarang'];
//
//			$insert = $db->query("INSERT INTO pemakaianbarang(jumlah,kodebarang)VALUES('$a','$b')");
//
//			//mengurangi stok
//			$update = $db->query("UPDATE barang set stok=stok-$a WHERE kodebarang='$b'");
//
//					 if($insert) {
//	echo "<div class='alert alert-success'>Sukses Tambah Data <a href='s_pemakaian.php'>Lihat Data</a> </div>";
//					 } else {
//					 	echo "<div class='alert alert-warning'>Gagal Tambah Data</div>";
//					 }
//
//					 }
-->
					 	
					 	
					 	<form action="<?=base_url();?>pemakaian/proses_tambah" method="post">
					 		<table width="80%">
					 			<tr>
					 				<td> Jumlah </td>
					 				<td>:</td>
					 				<td> <input type="number" name="jumlah" class="form-control" required> </td>
					 			</tr>
					 			<tr>
					 				<td> Kode Barang</td>
					 				<td>:</td>
					 				<td> 
					 					<select name="kodebarang" class="form-control" required>
					 						<?php
                                                foreach($ambil as $a) {
                                            echo "<option value='".$a->kodebarang."'>".$a->nmbarang."</option>";
                                                }
					 						?>
					 					</select>
					 				</td>
					 			</tr>
					 	
					 			<tr>
					 				<td></td>
					 				<td></td>
					 				<td>
					 					<input id="btnn" class="btn btn-success" type="submit" name="Tambah" value="Tambah">
					 				 </td>
					 			</tr>
					 		</table>
					 	</form>

					 </div>
				</div>

			</div> <!-- end content -->

<?php $this->load->view('template/footer'); ?>