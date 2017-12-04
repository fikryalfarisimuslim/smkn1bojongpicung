<?php 
	$this->load->view('Berita/header.php');
	$date = explode(' ', $row->tgl);
 ?>
	<div class="container">
		<h2>Edit Berita <?php echo $row->judul; ?></h2>

		<?php echo form_open_multipart('Berita/editProcess');?>
			<input type="hidden" name="id" value="<?php echo $row->id; ?>">
			<input type="text" name="Judul" value="<?php echo $row->judul; ?>" placeholder="Judul Kegiatan" class="form-control"><br>
			<input type="date" name="tgl" value="<?php echo $date['0'];?>" placeholder="" class="form-control"><br>
			<textarea class="form-control" name="Deskripsi" placeholder="Deksripsi Kegiatan" rows="10" value=""><?php echo $row->deskripsi; ?></textarea><br>
			<label for="">Foto Kegiatan : (Upload Baru) </label>
			<input type="file" name="img" placeholder="Masukkan Foto Anda" class="form-control"><br>
			<input type="submit" name="succeed" value="Tambah" class="btn btn-primary form-control"><br>
		</form>

	</div>
<?php 
	$this->load->view('Berita/footer.php');
 ?>