<?php $this->load->view('template/header'); ?>
<?php $this->load->view('template/menu'); ?>

<div id="content" class="col-md-10 col-xs-8 col-sm-9">

				<div id="panel" class="panel panel-info">
					<div class="panel-heading"> 
						<h3 class="panel-title"> <span class="glyphicon glyphicon-user"></span> Show Data Rincian Transaksi </h3>
					 </div>
					 <div class="panel-body">

                         <a id="tam_dat" class="btn btn-info btn-sm" href="<?=base_url();?>rinctransaksi/tambah">
                            <span class="glyphicon glyphicon-plus"></span> Tambah Data </a>

					 	<table border="1" class="table table-bordered">
					 		<tr>
					 			<th id="tengah">ID Rincian</th>
					 			<th id="tengah">No Transaksi</th>
					 			<th id="tengah">Jumlah</th>
					 			<th id="tengah">ID Jenis Pakaian</th>
					 			<th id="tengah">Actions</th>
					 		</tr>

					 		<?php
					 		    foreach($s_rinctrans as $a):
					 		?>

					 		<tr>
					 			<td id="tengah"><?= $a->idrincian; ?></td>
					 			<td id="tengah"><?= $a->notransaksi; ?></td>
					 			<td id="tengah"><?= $a->jumlah; ?></td>
					 			<td id="tengah"><?= $a->idjenispakaian; ?></td>
					 			<td id="tengah">
                                    
<a href="<?=base_url();?>rinctransaksi/edit_rinctransaksi/<?=$a->idrincian;?>"><span class="glyphicon glyphicon-edit"></a>
<a onclick="return confirm('Are You Sure?')" href="<?=base_url();?>rinctransaksi/hapus_rinctransaksi/<?=$a->idrincian;?>">
<span class="glyphicon glyphicon-trash"></a>

					 			</td>
					 		</tr>

					 		<?php endforeach;?>

					 	</table>
					 	
					 </div>
				</div>

			</div> <!-- end content -->


<?php $this->load->view('template/footer'); ?>