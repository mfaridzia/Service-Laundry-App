<!DOCTYPE html>
<html>
<head>
	<title>About App Laundry</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
	<style type="text/css">
		*{
			margin:0;padding: 0; font-family: sans-serif;
		}
		
		#nav {
			height: 100px;
			background: #2c3e50;
			position: fixed;
			top:0;
			z-index: 99;
		}
		#nav h1 {
			color: #fff;
			float: left;
			font-size: 25px;
			font-weight: bolder;
			margin: 40px 0px 0px 30px;
		}
		#nav h1:hover {
			color: #31b6be;
			transition:0.8s;
		}
		#nav ul {
			margin: 0;padding: 0;
		}
		#nav ul li {
			list-style: none;
			float: right;
			position: relative;right: 50px; top:5px;
		}
		#nav ul li a {
			color: #fff;
			text-decoration: none;
			display: block;
			padding: 35px 15px;
			font-size: 18px;
			font-weight: bolder;
		}
		#nav ul li a:hover { 
			color: #31b6be;
			transition:0.5s;
		}
		#header {
			height: 570px;
			background: #31b6be;
			margin-top: 100px;
			
		}
		#logo {
			margin: 0 auto;
			display: block;
			border-radius: 50%;
			width: 290px;
			height: 280px;
			margin-top: 90px;
		}
		#header h1 {
			text-align: center;color:#fff;
			font-weight: bolder;
			margin-top: 50px;
		}
		#header p {
			color:#fff;
			text-align: center;
			font-weight: bolder;
		}
		#content {
			height: 400px;
			background: #fff; 
		}
		#content h1 {
			font-size: 25px;
			text-align: center;
			font-weight: bolder;
			margin-top: 45px;
		}
		#content p {
			text-align: justify;
			padding:10px 70px 5px 60px;
			line-height: 27px;
		}
		#footer {
			height: 70px;
			background: #2c3e50;
			clear: both;
		}
		#footer p {
			text-align: center;
			color: #fff;
			position: relative;
			top:30px;
			font-weight: bolder;
		}
	</style>
</head>
<body>


	<div id="container" class="container-fluid"> 

			<div class="row">
			<div id="nav" class="col-md-12 col-xs-12 col-sm-12">
				<h1> LAUNDRY APPLICATION </h1>
				<ul>
					<li> <?= anchor('home/login','Login'); ?> </li>
					<li> <?= anchor('home/about','About'); ?> </li>
					<li> <?= anchor('home','Home'); ?> </li>
				</ul>
			</div>
			</div>

			<div class="row">
			<div id="header" class="col-md-12 col-xs-12 col-sm-12">
					<img id="logo" class="img-thumbnail" src="<?= base_url();?>assets/img/gambar2.png">
					<h1> LAUNDRY APPLICATION </h1>
					<p> Pelayanan Terbaik Untuk Pelanggan Kami </p>
			</div>
			</div>

			<div class="row">
			<div id="content"> 
				<h1> # SINGKAT TENTANG KAMI </h1>

				<p> 
				<b> Aplikasi Jasa Laundry By Muh Farid Zia </b>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>

			</div>
			</div>

			<div class="row">
			<div id="footer"> <p> Copyright &copy; 2016 By Muh Farid Zia </p> </div>
			</div>
		

	</div>


<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>

</body>
</html>