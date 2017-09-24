<?php $this->load->view('template/header'); ?>
<?php $this->load->view('template/menu'); ?>

<div id="content" class="col-md-10 col-xs-8 col-sm-9">

				<div id="panel" class="panel panel-info">
					<div class="panel-heading"> 
						<h3 class="panel-title"> <span class="glyphicon glyphicon-user"></span> 
                            Welcome <b style="color:#393939;"> 
                            <?= ucfirst($this->session->userdata('username')); ?> </b> to Laundry Application </h3>
					 </div>
					 <div class="panel-body">
					 	<h3> Selamat Datang Di Aplikasi Jasa Laundry <b> Versi 1.0 CI </b> </h3>
                         <h4> Fitur Yg Belum Di Lengkapi/Dipasang : </h4>
                         1. Auntentikasi/Security Untuk Semua File <br/>
                         2. Print Out/Report/Laporan Ke PDF <br/>
                         3. Login Multiuser(admin & user) Berbeda <br/>
                         4. Mengupload Foto Ke Homepage Secara Dinamis <br/>
                         5. Posting Berita Ke Homepage Secara Dinamis <br/>
                         6. Template Responsive Untuk Semua File <br/>
                         7. Pengunaan Plugin DataTables Untuk Pagination <br/>
                         8. Pengurangan Stok Dan Penambahan Secara Otomatis <br/>
                         9. Pengunaan Password Hash Yg Direkomendasikan <br/>
                         10. Menampilkan Data Account Admin Yang Login Saja 
					 </div>
				</div>

			</div> <!-- end content -->

<?php $this->load->view('template/footer'); ?>