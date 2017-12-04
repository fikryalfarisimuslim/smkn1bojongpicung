<?php 
	if(!isset($_SESSION['loggedin'])){
		redirect(site_url('/'));
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/main.css'); ?>">
</head>
<body>
	<div class="navbar navbar-default"  style="background-color:rgb(52, 73, 94);">
	    <div class="container">
			<div class="nav navbar-nav navbar-brand" style="margin-top:-5px">
				<img src="<?php echo base_url('assets/img/logo.jpg'); ?>" style="width: 40px; height:40px">
			</div>
			<div class="nav navbar-nav navbar-brand white">
				<p style="color:white">SMK Negeri 1 Bojong Picung</p>
				<p style="font-size:14px; color: white; margin-top: -10px; margin-left: 55px;"> Halaman Admin</p>
			</div>
			<ul class="nav navbar-nav navbar-right" style="padding-top:5px;">
				 <li role="presentation" class="active"><a href="<?php echo site_url('Berita/');?>">Beranda</a></li>
				 <li role="presentation"><a href="<?php echo site_url('Account/logout');?>" style="color:white;">Keluar</a></li>
			</ul>
	    </div>
	</div>