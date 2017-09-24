<?php $this->load->view('template/header'); ?>
<?php $this->load->view('template/menu'); ?>

<div id="content" class="col-md-10 col-xs-8 col-sm-9">

				<div id="panel" class="panel panel-info">
					<div class="panel-heading"> 
						<h3 class="panel-title"> <span class="glyphicon glyphicon-user"></span> Show Data Pembelian </h3>
					 </div>
					 <div class="panel-body">

    <a id="tam_dat" class="btn btn-info btn-sm" href="<?=base_url();?>pembelian/tambah"> 
    <span class="glyphicon glyphicon-plus"></span> Tambah Data </a>

					 	<table border="1" class="table table-bordered">
					 		<tr>
					 			<th id="tengah">No Pembelian</th>
					 			<th id="tengah">Tgl Pembelian</th>
					 			<th id="tengah">Total Biaya</th>
					 			<th id="tengah">ID Supplier</th>
					 			<th id="tengah">Actions</th>
					 		</tr>

					 		<?php
					 		    foreach($s_pembelian as $a):
					 		?>

					 		<tr>
					 			<td id="tengah"><?= $a->nopembelian; ?></td>
					 			<td id="tengah"><?= $a->tglpembelian; ?></td>
					 			<td id="tengah"><?= $a->totalbiaya; ?></td>
					 			<td id="tengah"><?= $a->idsupplier; ?></td>
					 			<td id="tengah">

<a href="<?=base_url();?>pembelian/edit_pembelian/<?=$a->nopembelian;?>"><span class="glyphicon glyphicon-edit"></a>
<a onclick="return confirm('Are You Sure?')" href="<?=base_url();?>pembelian/hapus_pembelian/<?=$a->nopembelian;?>">
<span class="glyphicon glyphicon-trash"></a>
					 			</td>
					 		</tr>

					 		<?php endforeach;?>

					 	</table>
					 	
					 </div>
				</div>

			</div> <!-- end content -->

<?php $this->load->view('template/footer'); ?>