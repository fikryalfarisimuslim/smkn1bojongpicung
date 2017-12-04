<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// echo validation_errors();
echo $this->session->flashdata('notification');
?>
<!DOCTYPE html>
<html >
	<head>
		<meta charset="UTF-8">
		<title>Login Admin</title>
		<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/csslogin/reset.css'); ?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/csslogin/style.css'); ?>">
		</head>
	<body>
		<div class="container">
			<div class="login">
				<h1 class="login-heading">
					<center><strong>Form Login Admin</strong></h1></center>
					<center><h1 class="senior">SMKN 1 Bojong Picung</h1></center>
					<hr>
					<?php echo form_open('Account/login')?>
						<input type="text" name="TxtUser" placeholder="Username" required="required" class="input-txt" value="<?php echo set_value('username'); ?>"/>
						<input type="password" name="TxtPassword" placeholder="Password" required="required" class="input-txt" value="<?php echo set_value('username'); ?>"/>
						<label style="color:white;">
							<input type="checkbox" value="remember-me"> Remember me
						</label>
						<div class="login-footer">
							<button type="submit" class="ghost-button-semi-transparent">Sign in  </button>
						</div>
					</form>
			</div>
			<form class="info">
				<table>
					<tr>
						<td style="font-size:18px;" colspan="2">Keterangan</td>
					</tr>
					<tr height="15">
						<td></td>
					</tr>
					<tr>
						<td style="font-size:12px;" width="12">O</td>
						<td style="font-size:12px;">Halaman admin ini diperuntukan bagi Admin Web Sekolah</td>
					</tr>
					<tr>
						<td style="font-size:12px;">O</td>
						<td style="font-size:12px;">User Name dan Password yang digunakan sudah terdaftar sebelumnya oleh pihak berwenang</td>
					</tr>
					<tr height="15">
						<td></td>
					</tr>
				</table>
			</form>
		</div>
        <script src="<?php echo base_url('assets/bootstrap/js/index.js'); ?>"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
		<script src="<?php echo base_url('assets/bootstrap/js/ie10-viewport-bug-workaround.js'); ?>"></script>
	</body>
</html>
