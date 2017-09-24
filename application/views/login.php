<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/css/bootstrap.min.css">
	<style type="text/css">
	body {
        background:;
	}
	#container {
		width: 100%;
		margin: 160px auto;
	}
	.login {
		width: 400px;
		height: auto;
		background: #2c3e50;
		margin: 0 auto;
		padding-bottom: 10px;
	}
	.judul h2 {
		margin: 0 auto;
		padding: 15px;
		background: #31b6be;
		text-align: center;
		color: #fff;
        font-size:24px;
	}
	table {
		margin: 25px auto;
	}
	input {
		width: 300px;
		margin-bottom: 10px;
	}
	#bbt {
		background: #31b6be;
		border: none;
	}
	#bbt:hover {
		opacity: 0.9;
	}
    .notif {
        text-align:center;
        color:#e64141;
    }
	</style>
</head>
<body>

	<div id="container">

        <p class="notif"> <?php echo $this->session->flashdata('notifikasi'); ?> </p> 
        
		<div class="login">

			<form action="<?= base_url();?>akun/proses_login" method="post">
				<div class="judul"> <h2> Please Login   </h2>  </div>
				<table>
					<tr>
<td> <input class="form-control" type="text" name="username" placeholder="Username" required autocomplete="off"> </td>
					</tr>
					<tr>
<td> <input class="form-control" type="password" name="password" placeholder="Password" required autocomplete="off"> </td>
					</tr>
					<tr>
						<td> <input id="bbt" class="btn btn-success" type="submit" name="login" value="Login"> </td>
					</tr>
				</table>
			</form>

		</div>

	</div>

<script type="text/javascript" src="<?= base_url();?>assets/js/jquery.js"></script>
<script type="text/javascript" src="<?= base_url();?>assets/js/bootstrap.min.js"></script>
</body>
</html>