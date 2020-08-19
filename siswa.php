<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">data siswa</div>
			<div class="panel-body">
				<div class="table">
					<table class="table table-striped table-bordered table-hover">
						<thead>
							<tr>
								<th>No</th>
								<th>NIS</th>
								<th>nama Siswa</th>
								<th>alamat</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
								<?php 
									$nomor=1;
									$ambil=$koneksi->query("SELECT * FROM t_siswa")
								?>
									<?php while($pecah=$ambil->fetch_assoc()){ ?>
						    <tr>
						    	<td><?php echo $nomor; ?></td>
						    	<td><?php echo $pecah['NIS']; ?></td>
						    	<td><?php echo $pecah['Nama_siswa']; ?></td>
						    	<td><?php echo $pecah['Alamat']; ?></td>
						    	<td>
						    		<a href="index.php?page=editsiswa&nis=<?php echo $pecah['NIS']; ?>" class="btn-info btn-xs"><i class="fa fa-pencil"></i> Edit</a>
									<a href="index.php?page=hapussiswa&nis=<?php echo $pecah['NIS']; ?>" class="btn-danger btn-xs"><i class="fa fa-trash"></i> Hapus</a>
						    	</td>
						    </tr>
						    	<?php $nomor++; ?>
							    <?php } ?>
						</tbody>
					</table>
				</div>
				<div class="panel-footer">
					<a href="index.php?page=tambahsiswa" class="btn btn-success"><i class="fa fa-plus"></i> Tambah siswa</a>
				</div>
			</div>
		</div>
	</div>
</div>