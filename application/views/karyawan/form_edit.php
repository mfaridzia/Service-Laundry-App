<?php $this->load->view('template/header'); ?>
<?php $this->load->view('template/menu'); ?>

    
    <div id="content" class="col-md-10 col-xs-8 col-sm-9">

				<div id="panel" class="panel panel-info">
					<div class="panel-heading"> 
						<h3 class="panel-title"> 
						<span class="glyphicon glyphicon-user"></span>
						Edit Data Karyawan
						</h3>
					 </div>
					 <div class="panel-body">
					 	
					 	<form action="<?= base_url();?>karyawan/proses_edit" method="post">
					 		<table width="80%">
					 			<tr>
					 				<td> Nik </td>
					 				<td>:</td>
    <td> <input type="text" name="nik" class="form-control" value="<?= $karyawan->nik; ?>" readonly required> </td>
					 			</tr>
					 			<tr>
					 				<td> Nama Karyawan </td>
					 				<td>:</td>
   <td> <input type="text" name="nmkaryawan" class="form-control" value="<?= $karyawan->nmkaryawan; ?>" required> </td>
					 			</tr>
					 			<tr>
					 				<td> Alamat Karyawan </td>
					 				<td>:</td>
   <td> <input type="text" name="almtkaryawan" class="form-control" value="<?= $karyawan->almtkaryawan; ?>" required> </td>
					 			</tr>
					 	         <tr>
					 				<td> Telp Karyawan </td>
					 				<td>:</td>
   <td> <input type="text" name="telpkaryawan" class="form-control" value="<?= $karyawan->telpkaryawan; ?>" required> </td>
					 			</tr>
					 			<tr>
					 				<td> Jenis Kelamin </td>
					 				<td>:</td>
					 				<td> 
   <select class="form-control" required name="genderkaryawan">
				<option value="L"> Laki-laki </option>
                <option value="P" <?php if($karyawan->genderkaryawan=="P"){ echo 'selected'; }?>> Perempuan </option>
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