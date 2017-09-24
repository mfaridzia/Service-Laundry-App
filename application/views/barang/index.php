<?php $this->load->view('template/header'); ?>
<?php $this->load->view('template/menu'); ?>

<div id="content" class="col-md-10 col-xs-8 col-sm-9">

				<div id="panel" class="panel panel-info">
					<div class="panel-heading"> 
						<h3 class="panel-title"> <span class="glyphicon glyphicon-user"></span> Show Data Barang </h3>
					 </div>
					 <div class="panel-body">

  <a id="tam_dat" class="btn btn-info btn-sm" href="<?=base_url();?>barang/tambah">
      <span class="glyphicon glyphicon-plus"></span> Tambah Data </a>

					 	<table border="1" class="table table-bordered">
					 		<tr>
					 			<th id="tengah">Kode Barang</th>
					 			<th id="tengah">Nama Barang</th>
					 			<th id="tengah">Stok Barang</th>
					 			<th id="tengah">Tgl Update Stok</th>
					 			<th id="tengah">Actions</th>
					 		</tr>
                            
                            <?php
                                foreach($s_brg as $barang):
                            ?>
                            
					 		<tr>
					 			<td id="tengah"><?= $barang->kodebarang; ?></td>
					 			<td id="tengah"><?= $barang->nmbarang; ?></td>
					 			<td id="tengah"><?= $barang->stok; ?></td>
					 			<td id="tengah"><?= $barang->tglupdatestok; ?></td>
					 			<td id="tengah">

<a href="<?=base_url();?>barang/edit_barang/<?=$barang->kodebarang?>"><span class="glyphicon glyphicon-edit"></a>
<a onclick="return confirm('Are You Sure?')" href="<?=base_url();?>barang/hapus_barang/<?=$barang->kodebarang?>">
<span class="glyphicon glyphicon-trash"></a>

					 			</td>
					 		</tr>

					 		<?php endforeach;?>

					 	</table>
					 	
					 </div>
				</div>

			</div> <!-- end content -->
    
<?php $this->load->view('template/footer'); ?>