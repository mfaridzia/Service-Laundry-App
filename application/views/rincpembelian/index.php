<?php $this->load->view('template/header'); ?>
<?php $this->load->view('template/menu'); ?>

<div id="content" class="col-md-10 col-xs-8 col-sm-9">

				<div id="panel" class="panel panel-info">
					<div class="panel-heading"> 
						<h3 class="panel-title"> <span class="glyphicon glyphicon-user"></span> Show Data Rincian Pembelian </h3>
					 </div>
					 <div class="panel-body">

<a id="tam_dat" class="btn btn-info btn-sm" href="<?=base_url();?>rincpembelian/tambah"> 
    <span class="glyphicon glyphicon-plus"></span> Tambah Data</a>

					 	<table border="1" class="table table-bordered">
					 		<tr>
					 			<th id="tengah">No Rincian</th>
					 			<th id="tengah">No Pembelian</th>
					 			<th id="tengah">Kode Barang</th>
					 			<th id="tengah">Jumlah</th>
					 			<th id="tengah">Actions</th>
					 		</tr>

					 		<?php
					 		    foreach($s_rincpem as $rincpem):
					 		?>

					 		<tr>
					 			<td id="tengah"><?= $rincpem->norincian; ?></td>
					 			<td id="tengah"><?= $rincpem->nopembelian; ?></td>
					 			<td id="tengah"><?= $rincpem->kodebarang; ?></td>
					 			<td id="tengah"><?= $rincpem->jumlah; ?></td>
					 			<td id="tengah">

<a href="<?=base_url();?>rincpembelian/edit_rincpembelian/<?=$rincpem->norincian;?>"><span class="glyphicon glyphicon-edit"></a>
<a onclick="return confirm('Are You Sure?')" href="<?=base_url();?>rincpembelian/hapus_rincpembelian/<?=$rincpem->norincian;?>">
<span class="glyphicon glyphicon-trash"></a>
					 			</td>
					 		</tr>

					 		<?php endforeach;?>

					 	</table>
					 	
					 </div>
				</div>

			</div> <!-- end content -->

<?php $this->load->view('template/footer'); ?>