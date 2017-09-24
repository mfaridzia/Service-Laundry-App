<?php $this->load->view('template/header'); ?>
<?php $this->load->view('template/menu'); ?>

<div id="content" class="col-md-10 col-xs-8 col-sm-9">

				<div id="panel" class="panel panel-info">
					<div class="panel-heading"> 
						<h3 class="panel-title"> 
						<span class="glyphicon glyphicon-user"></span>
						Edit Data Admin
						</h3>
					 </div>
					 <div class="panel-body">
					 	
					 	<form action="<?=base_url();?>akun/proses_edit" method="post">
					 		<table width="80%">
					 			<tr>
					 				<td> Username </td>
					 				<td>:</td>
<td> <input type="text" name="username" value="<?=$akun->username;?>" class="form-control" readonly required> </td>
					 			</tr>
					 			<tr>
					 				<td> Password </td>
					 				<td>:</td>
<td> <input type="password" name="password" value="<?=$akun->password;?>" class="form-control" required> </td>
					 			</tr>
					 	
					 			<tr>
					 				<td></td>
					 				<td></td>
					 				<td>
					 					<input id="btnn" class="btn btn-success" type="submit" name="update" value="Update">
					 				 </td>
					 			</tr>
					 		</table>
					 	</form>

					 </div>
				</div>

			</div> <!-- end content -->

<?php $this->load->view('template/footer'); ?>
