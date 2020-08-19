<div class="row">
	<div class="col-md-12">
		<div class="box">
			<div class="box-header">
				<h3 class="box-title" style="padding-top:0; margin-top:0; color:#f00;"> Edit customer</h3>
					<?php 
						$ambil=$koneksi->query("SELECT * FROM t_siswa WHERE NIS='$_GET[nis]'");
						$pecah=$ambil->fetch_assoc();
					 ?>
					 <form method="post" enctype="multipart/form-data">
					 	<div class="form-group">
					 		<label>NIS</label>
					 		<input type="number" class="form-control" name="nis" value="<?php echo $pecah['NIS']; ?>">
					 	</div>
					 	<div class="form-group">
					 		<label>Nama Siswa</label>
					 		<input type="text" class="form-control" name="namas" value="<?php echo $pecah['Nama_siswa']; ?>">
					 	</div>
					 	<div class="form-group">
					 		<label>Alamat</label>
					 		<input type="text" class="form-control" name="alamat" value="<?php echo $pecah['Alamat']; ?>">
					 	</div>
					 		<button class="btn btn-primary" name="edit"><i class="fa fa-save"></i> Simpan</button>
							<a href="index.php?page=siswa" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Kembali ke Siswa</a>
					 </form>
					 	<?php 
					 		if (isset($_POST['edit'])) 
					 		{
					 			# code...
					 			$koneksi->query("UPDATE t_siswa SET NIS='$_POST[nis]',Nama_siswa='$_POST[namas]',Alamat='$_POST[alamat]' WHERE NIS='$_GET[nis]'");

					 			echo "<script>alert('Data customer Telah Diedit');</script>";

					 		}
					 	 ?>
			</div>
		</div>
	</div>
</div>