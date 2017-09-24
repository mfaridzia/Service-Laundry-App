<?php $this->load->view('template/header'); ?>
<?php $this->load->view('template/menu'); ?>

<div id="content" class="col-md-10 col-xs-8 col-sm-9">

				<div id="panel" class="panel panel-info">
					<div class="panel-heading"> 
						<h3 class="panel-title"> <span class="glyphicon glyphicon-user"></span> Show Data Tarif </h3>
					 </div>
					 <div class="panel-body">

   <a id="tam_dat" class="btn btn-info btn-sm" href="<?=base_url();?>tarif/tambah"> 
    <span class="glyphicon glyphicon-plus"></span> Tambah Data </a>

					 	<table border="1" class="table table-bordered">
					 		<tr>
					 			<th id="tengah">ID Jenis Pakaian</th>
					 			<th id="tengah">Nama Pakaian</th>
					 			<th id="tengah">Tarif</th>
					 			<th id="tengah">ID Jenis Laundry</th>
					 			<th id="tengah">Actions</th>
					 		</tr>

					 		<?php
					 		 foreach($s_tarif as $trf):
					 		?>

					 		<tr>
					 			<td id="tengah"><?= $trf->idjenispakaian; ?></td>
					 			<td id="tengah"><?= $trf->nmpakaian; ?></td>
					 			<td id="tengah"><?= $trf->tarif; ?></td>
					 			<td id="tengah"><?= $trf->idjenislaundry; ?></td>
					 			<td id="tengah">
                                    
<a href="<?=base_url();?>tarif/edit_tarif/<?=$trf->idjenispakaian;?>"><span class="glyphicon glyphicon-edit"></a>
<a onclick="return confirm('Are You Sure?')" href="<?=base_url();?>tarif/hapus_tarif/<?=$trf->idjenispakaian;?>">
<span class="glyphicon glyphicon-trash"></a>
					 			

					 			</td>
					 		</tr>

					 		<?php endforeach;?>

					 	</table>
					 	
					 </div>
				</div>

			</div> <!-- end content -->

<?php $this->load->view('template/footer'); ?>
