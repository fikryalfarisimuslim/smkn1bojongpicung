<?php 
	$this->load->view('Berita/header.php');
 ?>
	<div class="container">
		<div class="jumbotron" align="center">
			<h2>Selamat Datang, Admin!</h2>
			<br>

			<a href="<?php echo site_url('Berita/showBerita/');?>" title=""><button class="btn btn-primary">Berita</button></a>
			<a href="<?php echo site_url('FotoKegiatan/');?>" title=""><button class="btn btn-primary">Foto Kegiatan</button></a>
		</div>
	</div>
<?php 
	$this->load->view('Berita/footer.php');
 ?>