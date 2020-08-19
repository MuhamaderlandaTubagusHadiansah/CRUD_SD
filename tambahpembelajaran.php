<div class="row">
	<div class="col-md-12">
		<div class="box">
			<div class="box-header">
				<h3 class="box-title" style="padding-top:0; margin-top:0; color:#f00;">Tambah Pembelajaran</h3>
				<form method = "post" enctype="multipart/form-data">
					<div class="form-group">
						<label>Nis</label>
						<input type="text" class="form-control"  name="nis" placeholder="Masukan Kode pelajaran">
					</div>
					<div class="form-group">
						<label>Kode Pelajaran</label>
						<input type="text" class="form-control" name="kdpel" placeholder="Masukan Nama Pelajaran">
					</div>
					<div class="form-group">
						<label>Nip</label>
						<input type="text" class="form-control" name="nip" placeholder="Masukan Nama Pelajaran">
					</div>
					<div class="form-group">
						<label>Nilai</label>
						<input type="text" class="form-control" name="nilai" placeholder="Masukan Nama Pelajaran">
					</div>
					<button class="btn btn-primary" name="save"><i class="fa fa-save"></i> Simpan</button>
					<a href="index.php?page=pembelajaran" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Kembali ke pembelajaran</a>
				</form>
				<?php
				if (isset($_POST['save'])) {
				 	# code...
				 	$koneksi->query("INSERT INTO t_pembelajaran
				 		(NIS,Kode_pel,NIP,Nilai) VALUES ('$_POST[nis]','$_POST[kdpel]','$_POST[nip]','$_POST[nilai]')");

				 	echo "<script>alert('Data Pembelajaran Berhasil Disimpan');</script>";

				 } 
				 ?>
			</div>
		</div>
	</div>
</div>