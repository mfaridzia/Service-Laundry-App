<?php $this->load->view('template/header'); ?>
<?php $this->load->view('template/menu'); ?>

<div id="content" class="col-md-10 col-xs-8 col-sm-9">

				<div id="panel" class="panel panel-info">
					<div class="panel-heading"> 
						<h3 class="panel-title"> <span class="glyphicon glyphicon-user"></span> Show Data Pemakaian </h3>
					 </div>
					 <div class="panel-body">

<a id="tam_dat" class="btn btn-info btn-sm" href="<?=base_url();?>pemakaian/tambah"> <span class="glyphicon glyphicon-plus"></span> Tambah Data</a>

					 	<table border="1" class="table table-bordered">
					 		<tr>
					 			<th id="tengah">Kode Pengeluaran</th>
					 			<th id="tengah">Jumlah</th>
					 			<th id="tengah">Kode Barang</th>
					 			<th id="tengah">Actions</th>
					 		</tr>
                            
                            <?php
                                foreach($s_pemakaian as $pemakaian):
                            ?>
                            
					 		<tr>
					 			<td id="tengah"><?= $pemakaian->kodepengeluaran; ?></td>
					 			<td id="tengah"><?= $pemakaian->jumlah; ?></td>
					 			<td id="tengah"><?= $pemakaian->kodebarang; ?></td>
					 			<td id="tengah">

<a href="<?=base_url();?>pemakaian/edit_pemakaian/<?=$pemakaian->kodepengeluaran?>"><span class="glyphicon glyphicon-edit"></a>
<a onclick="return confirm('Are You Sure?')" href="<?=base_url();?>pemakaian/hapus_pemakaian/<?=$pemakaian->kodepengeluaran?>">
<span class="glyphicon glyphicon-trash"></a>
					 			</td>
					 		</tr>

					 		<?php endforeach; ?>

					 	</table>
					 	
					 </div>
				</div>

			</div> <!-- end content -->


<?php $this->load->view('template/footer'); ?>