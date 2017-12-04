<?php 
	$this->load->view('Berita/header.php');
 ?>
	<div class="container">
		<h2>Tambah Berita</h2>

		<?php echo form_open_multipart('Berita/addProcess');?>
			<input type="text" name="Judul" value="" placeholder="Judul Kegiatan" class="form-control"><br>
			<input type="date" name="tgl" value="<?php echo date('Y-m-d');?>" placeholder="" class="form-control"><br>
			<textarea class="form-control" name="Deskripsi" placeholder="Deksripsi Kegiatan" rows="10"></textarea><br>
			<label for="">Foto Kegiatan : </label>
			<input type="file" name="img" value="" placeholder="Masukkan Foto Anda" class="form-control"><br>
			<input type="submit" name="succeed" value="Tambah" class="btn btn-primary form-control"><br>
		</form>

	</div>
<?php 
	$this->load->view('Berita/footer.php');
 ?>