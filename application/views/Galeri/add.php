<?php 
	$this->load->view('Berita/header.php');
 ?>
	<div class="container">
		<h2>Tambah Foto Kegiatan</h2>

		<?php echo form_open_multipart('FotoKegiatan/uploadNew');?>
			<input type="text" name="judul" value="" placeholder="Judul Foto" class="form-control" required=""><br>
			<input type="text" name="tags" value="" placeholder="Kategori/Tags" class="form-control" required=""><br>
			<label for="">Foto Kegiatan : </label>
			<input type="file" name="img" value="" placeholder="Masukkan Foto Anda" class="form-control" required=""><br>
			<input type="submit" name="succeed" value="Tambah" class="btn btn-primary form-control"><br>
		</form>

	</div>
<?php 
	$this->load->view('Berita/footer.php');
 ?>