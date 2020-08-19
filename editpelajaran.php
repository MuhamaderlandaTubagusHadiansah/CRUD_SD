<div class="row">
	<div class="col-md-12">
		<div class="box">
			<div class="box-header">
				<h3 class="box-title" style="padding-top:0; margin-top:0; color:#f00;"> Edit Pelajaran</h3>
					<?php 
						$ambil=$koneksi->query("SELECT * FROM t_pelajaran WHERE kode_pel='$_GET[kp]'");
						$pecah=$ambil->fetch_assoc();
					 ?>
					 <form method="post" enctype="multipart/form-data">
					 	<div class="form-group">
					 		<label>kode pelejaran</label>
					 		<input type="text" class="form-control" name="kp"  value="<?php echo $pecah['kode_pel']; ?>">	
					 	</div>
					 	<div class="form-group">
					 		<label>nama pelajaran</label>
					 		<input type="text" class="form-control" name="namap" value="<?php echo $pecah['nama_pel']; ?>">
					 	</div>
					 		<button class="btn btn-primary" name="edit"><i class="fa fa-save"></i> Simpan</button>
							<a href="index.php?page=pelajaran" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Kembali ke produk</a>
					 </form>
					 	<?php 
					 		if (isset($_POST['edit'])) 
					 		{
					 			# code...
					 			$koneksi->query("UPDATE t_pelajaran SET kode_pel='$_POST[kp]',nama_pel='$_POST[namap]' WHERE kode_pel ='$_GET[kp]'");

					 			echo "<script>alert('Data Pelajaran Telah Diedit');</script>";

					 		}
					 	 ?>
			</div>
		</div>
	</div>
</div>