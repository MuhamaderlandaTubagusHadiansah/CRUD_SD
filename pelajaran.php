<div class="row"> 
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">Data Pelajaran</div>
			<div class="panel-body">
				<div class="table">
					<table class="table table-striped table-bordered table-hover">
						<thead>
							<tr>
								<th>No</th>
								<th>Kode Pel</th>
								<th>Nama Pel</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
								<?php 
										$nomor=1;
										$ambil=$koneksi->query("SELECT * FROM t_pelajaran")
								?>
									 	<?php while($pecah=$ambil->fetch_assoc()){ ?>
								<tr class="odd gradeX">
									<td><?php echo $nomor; ?></td>
									<td><?php echo $pecah['kode_pel']; ?></td>
									<td><?php echo $pecah['nama_pel']; ?></td>
									<td>
										<a href="index.php?page=editpelajaran&kp=<?php echo $pecah['kode_pel']; ?>" class="btn-info btn-xs"><i class="fa fa-pencil"></i> Edit</a>
										<a href="index.php?page=hapuspelajaran&kp=<?php echo $pecah['kode_pel']; ?>" class="btn-danger btn-xs"><i class="fa fa-trash"></i> Hapus</a>
									</td>
								</tr>
									<?php $nomor++; ?>
									<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
			<div class="panel-footer">
				<a href="index.php?page=tambahpelajaran" class="btn btn-info"><i class="fa fa-plus"></i> Tambah Pelajaran</a>
			</div>
		</div>
	</div>
</div>