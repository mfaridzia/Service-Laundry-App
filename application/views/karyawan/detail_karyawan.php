<?php $this->load->view('template/header'); ?>
<?php $this->load->view('template/menu'); ?>

    <div id="content" class="col-md-10 col-xs-8 col-sm-9">

				<div id="panel" class="panel panel-info">
					<div class="panel-heading"> 
						<h3 class="panel-title"> <span class="glyphicon glyphicon-user"></span> Detail Data Karyawan </h3>
					 </div>
					 <div class="panel-body">

<a id="tam_dat" class="btn btn-info btn-sm" href="<?=base_url();?>karyawan/tambah"> <span class="glyphicon glyphicon-plus"></span> Tambah Data</a>

					 	<table border="1" class="table table-bordered">
					 		<tr>
					 			<th id="tengah">Nik</th>
					 			<th id="tengah">Nama Karyawan</th>
					 			<th id="tengah">Alamat Karyawan</th>
					 			<th id="tengah">Telp</th>
					 			<th id="tengah">Jenis Kelamin</th>
					 			<th id="tengah">Actions</th>
					 		</tr>
                            
                            <?php
                                foreach($detail_kar as $karyawan):
                            ?>
                            
					 		<tr>
					 			<td id="tengah"><?= $karyawan->nik; ?></td>
					 			<td id="tengah"><?= $karyawan->nmkaryawan; ?></td>
					 			<td id="tengah"><?= $karyawan->almtkaryawan ?></td>
					 			<td id="tengah"><?= $karyawan->telpkaryawan ?></td>
					 			<td id="tengah"><?= $karyawan->genderkaryawan ?></td>
					 			<td id="tengah">

<a href="<?=base_url();?>karyawan/edit_karyawan/<?=$karyawan->nik?>"><span class="glyphicon glyphicon-edit"></a>
<a onclick="return confirm('Are You Sure?')" href="<?=base_url();?>karyawan/hapus_karyawan/<?=$karyawan->nik?>">
<span class="glyphicon glyphicon-trash"></a>
<a href="<?=base_url();?>karyawan/detail/<?=$karyawan->nik?>"> <span title="Detail" class="glyphicon glyphicon-check"></span></a>	
					 			</td>
					 		</tr>

					 		<?php endforeach; ?>

					 	</table>
					 	
					 </div>
				</div>

			</div> <!-- end content -->


<?php $this->load->view('template/footer'); ?>