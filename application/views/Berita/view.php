<?php 
	$this->load->view('Berita/header.php');
 ?>
	<div class="container">
		<h2>Panel Berita</h2>
		<a href="<?php echo site_url('Berita/addBerita/');?>" title=""><button type="" class="btn btn-warning"><i class="glyphicon glyphicon-plus"></i> Tambah Berita </button></a><br><br>
		<div class="row">
			<?php 
			 	foreach($daftarBerita as $row){
			 ?>
			<div class="col-sm-6 col-md-4">
				<div class="thumbnail">
					<?php  echo '<img src="data:image/jpeg;base64,'.base64_encode($row->foto) .'" class="img-responsive fit"/>'; ?>
					<div class="caption">
						<h3><?php echo $row->judul;?></h3>
						<p><?php echo $row->deskripsi; ?></p>
						<p><a href="<?php echo site_url('Berita/editBerita/'.$row->id);?>" class="btn btn-primary" role="button">Edit</a> <a href="<?php echo site_url('Berita/deleteBerita/'.$row->id);?>" class="btn btn-danger" role="button">Delete</a></p>
				  </div>
				</div>
			</div>
			<?php 
				}
			 ?>
		</div>
		<br>
		<br>
		<br>
	</div>
<?php 
	$this->load->view('Berita/footer.php');
 ?>