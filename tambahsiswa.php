<div class="row">
	<div class="col-md-12">
		<div class="box">
			<div class="box-header">
				<h3 class="box-title" style="padding-top:0; margin-top:0; color:#f00;">Tambah Siswa</h3>
				<form method = "post" enctype="multipart/form-data">
					<div class="form-group">
						<label>NIS</label>
						<input type="text" class="form-control"  name="nis" placeholder="Masukan nis">
					</div>
					<div class="form-group">
						<label>Nama Siswa</label>
						<input type="text" class="form-control" name="namas" placeholder="Masukan Nama Siswa">
					</div>
						<div class="form-group">
							<label>Alamat</label>
							<input type="text" class="form-control" name="alamat"  placeholder="Masukan Alamat">
						<div>
					</div>
					<button class="btn btn-primary" name="save"><i class="fa fa-save"></i> Simpan</button>
					<a href="index.php?page=siswa" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Kembali ke siswa</a>
				</form>
				<?php
				if (isset($_POST['save'])) {
				 	# code...
				 	$koneksi->query("INSERT INTO t_siswa
				 		(NIS,Nama_siswa,Alamat) VALUES ('$_POST[nis]','$_POST[namas]','$_POST[alamat]')");

				 	echo "<script>alert('Data Siswa Berhasil Disimpan');</script>";

				 } 
				 ?>
			</div>
		</div>
	</div>
</div>