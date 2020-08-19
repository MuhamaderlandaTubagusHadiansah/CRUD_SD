<div class="row">
	<div class="col-md-12">
		<div class="box">
			<div class="box-header">
				<h3 class="box-title" style="padding-top:0; margin-top:0; color:#f00;">Tambah Pelajaran</h3>
				<form method = "post" enctype="multipart/form-data">
					<div class="form-group">
						<label>Kode Pelajaran</label>
						<input type="text" class="form-control"  name="kp" placeholder="Masukan Kode pelajaran">
					</div>
					<div class="form-group">
						<label>Nama Pelajaran</label>
						<input type="text" class="form-control" name="namap" placeholder="Masukan Nama Pelajaran">
					</div>
					<button class="btn btn-primary" name="save"><i class="fa fa-save"></i> Simpan</button>
					<a href="index.php?page=pelajaran" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Kembali ke pelajaran</a>
				</form>
				<?php
				if (isset($_POST['save'])) {
				 	# code...
				 	$koneksi->query("INSERT INTO t_pelajaran
				 		(kode_pel,nama_pel) VALUES ('$_POST[kp]','$_POST[namap]')");

				 	echo "<script>alert('Data Pelajaran Berhasil Disimpan');</script>";

				 } 
				 ?>
			</div>
		</div>
	</div>
</div>