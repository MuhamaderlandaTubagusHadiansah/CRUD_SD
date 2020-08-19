<div class="row">
	<div class="col-md-12">
		<div class="box">
			<div class="box-header">
				<h3 class="box-title" style="padding-top:0; margin-top:0; color:#f00;"> Edit Guru</h3>
					<?php 
						$ambil=$koneksi->query("SELECT * FROM t_guru WHERE NIP='$_GET[nip]'");
						$pecah=$ambil->fetch_assoc();
					 ?>
					 <form method="post" enctype="multipart/form-data">
					 	<div class="form-group">
					 		<label>NIP</label>
					 		<input type="number" class="form-control" name="nip"  value="<?php echo $pecah['NIP']; ?>">	
					 	</div>
					 	<div class="form-group">
					 		<label>Nama Guru</label>
					 		<input type="text" class="form-control" name="nama" value="<?php echo $pecah['Nama_guru']; ?>">
					 	</div>

					 		<button class="btn btn-primary" name="edit"><i class="fa fa-save"></i> Simpan</button>
							<a href="index.php?page=guru" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Kembali ke guru</a>
					 </form>
					 	<?php 
					 		if (isset($_POST['edit'])) 
					 		{
					 			# code...
					 			$koneksi->query("UPDATE t_guru SET NIP='$_POST[nip]',Nama_guru='$_POST[nama]' WHERE NIP='$_GET[nip]'");

					 			echo "<script>alert('Data guru Telah Diedit');</script>";

					 		}
					 	 ?>
			</div>
		</div>
	</div>
</div>