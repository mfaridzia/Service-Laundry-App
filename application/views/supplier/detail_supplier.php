<?php $this->load->view('template/header'); ?>
<?php $this->load->view('template/menu'); ?>

<div id="content" class="col-md-10 col-xs-8 col-sm-9">

				<div id="panel" class="panel panel-info">
					<div class="panel-heading"> 
						<h3 class="panel-title"> <span class="glyphicon glyphicon-user"></span> Show Data Supplier </h3>
					 </div>
					 <div class="panel-body">

                         <a id="tam_dat" class="btn btn-info btn-sm" href="<?=base_url();?>supplier/tambah">
                             <span class="glyphicon glyphicon-plus"></span> Tambah Data</a>

					 	<table border="1" class="table table-bordered">
					 		<tr>
					 			<th id="tengah">ID Supplier</th>
					 			<th id="tengah">Nama Supplier</th>
					 			<th id="tengah">Alamat Supplier</th>
					 			<th id="tengah">Telp Supplier</th>
					 			<th id="tengah">Actions</th>
					 		</tr>

					 		<?php
					 		    foreach($detail_sup as $supplier):
					 		?>

					 		<tr>
					 			<td id="tengah"><?= $supplier->idsupplier; ?></td>
					 			<td id="tengah"><?= $supplier->nmsupplier; ?></td>
					 			<td id="tengah"><?= $supplier->almtsupplier; ?></td>
					 			<td id="tengah"><?= $supplier->telpsupplier; ?></td>
					 			<td id="tengah">
                                    
<a href="<?=base_url();?>supplier/edit_supplier/<?=$supplier->idsupplier;?>"><span class="glyphicon glyphicon-edit"></a>
    
<a onclick="return confirm('Are You Sure?')" href="<?=base_url();?>supplier/hapus_supplier/<?=$supplier->idsupplier;?>">
<span class="glyphicon glyphicon-trash"></a>
    
<a href="<?=base_url();?>supplier/detail/<?=$supplier->idsupplier;?>"> <span title="Detail" class="glyphicon glyphicon-check"></span></a>	
					 			</td>
					 		</tr>

					 		<?php endforeach; ?>

					 	</table>
					 	
					 </div>
				</div>

			</div> <!-- end content -->
    
<?php $this->load->view('template/footer'); ?>