<div class="row">
	<div class="col-md-12">
		<div class="box">
			<div class="box-header">
				<h3 class="box-title" style="padding-top:0; margin-top:0; color:#f00;">Tambah Guru</h3>
				<form method = "post" enctype="multipart/form-data">
					<div class="form-group">
						<label>NIP</label>
						<input type="text" class="form-control"  name="nip" placeholder="Masukan NIP">
					</div>
					<div class="form-group">
						<label>Nama guru</label>
						<input type="text" class="form-control" name="nama" placeholder="Masukan Nama guru">
					</div>
					<button class="btn btn-primary" name="save"><i class="fa fa-save"></i> Simpan</button>
					<a href="index.php?page=guru" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Kembali ke guru</a>
				</form>
				<?php
				if (isset($_POST['save'])) {
				 	# code...
				 	$koneksi->query("INSERT INTO t_guru
				 		(NIP,Nama_guru) VALUES ('$_POST[nip]','$_POST[nama]')");

				 	echo "<script>alert('Data Supplier Berhasil Disimpan');</script>";

				 } 
				 ?>
			</div>
		</div>
	</div>
</div>