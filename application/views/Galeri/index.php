<?php 
	$this->load->view('Berita/header.php');
 ?>
	<div class="container">
		<h2>Panel Galeri Foto</h2>
		<a href="<?php echo site_url('FotoKegiatan/tambahFoto/');?>" title=""><button type="" class="btn btn-warning"><i class="glyphicon glyphicon-plus"></i> Tambah Foto </button></a><br><br>
		<div class="row">
			<?php 
			 	foreach($daftarFoto as $row){
			 ?>
			<div class="col-xs-6 col-md-3 bss">
				<div class="capt">
					<?php echo $row->judul;?>
				</div>
			 	<a href="<?php echo base_url('upload/'.$row->path);?>" class="thumbnail"> 
			 	<img alt="100%x180" src="<?php echo base_url('upload/'.$row->path);?>"style="height: 180px; width: 100%; display: block;"> 
			 	</a> 
			</div>
			<?php 
				}
			 ?>
		</div>
		
	</div>
<?php 
	$this->load->view('Berita/footer.php');
 ?>