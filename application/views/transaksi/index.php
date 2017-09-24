<?php $this->load->view('template/header'); ?>
<?php $this->load->view('template/menu'); ?>

<div id="content" class="col-md-10 col-xs-8 col-sm-9">

				<div id="panel" class="panel panel-info">
					<div class="panel-heading"> 
						<h3 class="panel-title"> <span class="glyphicon glyphicon-user"></span> Show Data Transaksi </h3>
					 </div>
					 <div class="panel-body">

                         <a id="tam_dat" class="btn btn-info btn-sm" href="<?=base_url();?>transaksi/tambah"> 
                             <span class="glyphicon glyphicon-plus"></span> Tambah Data </a>

					 	<table border="1" class="table table-bordered">
					 		<tr>
					 			<th id="tengah">No Transaksi</th>
					 			<th id="tengah">Tgl Transaksi</th>
					 			<th id="tengah">Tgl Ambil</th>
					 			<th id="tengah">Diskon</th>
					 			<th id="tengah">Kode Konsumen</th>
					 			<th id="tengah">Actions</th>
					 		</tr>

					 		<?php
					 		    foreach($transaksi as $trans):
					 		?>

					 		<tr>
					 			<td id="tengah"><?= $trans->notransaksi; ?> </td>
					 			<td id="tengah"><?= $trans->tgltransaksi; ?> </td>
					 			<td id="tengah"><?= $trans->tglambil; ?> </td>
					 			<td id="tengah"><?= $trans->diskon." % "; ?> </td>
					 			<td id="tengah"><?= $trans->kodekonsumen; ?> </td>
					 			<td id="tengah">
				 			
<a href="<?=base_url();?>transaksi/edit_transaksi/<?=$trans->notransaksi;?>"><span class="glyphicon glyphicon-edit"></a>
<a onclick="return confirm('Are You Sure?')" href="<?=base_url();?>transaksi/hapus_transaksi/<?=$trans->notransaksi;?>">
<span class="glyphicon glyphicon-trash"></a>
                                    
					 			</td>
					 		</tr>

					 		<?php endforeach; ?>

					 	</table>
					 	
					 </div>
				</div>

			</div> <!-- end content -->
    
<?php $this->load->view('template/footer'); ?>