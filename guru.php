<div class="row">
	<div class="col-md-12">
		<div>
			<div class="panel-heading">Data Guru</div>
			<div class="panel-body">
				<div class="table">
					<table class="table table-striped table-bordered table-hover">
						<thead>
							<tr>
								<th>No</th>
								<th>Nip</th>
								<th>Nama Guru</th>
								<th>Aksi</th>
							</tr>
							<tbody>
									<?php 
										$nomor=1;
										$ambil=$koneksi->query("SELECT * FROM t_guru")
									?>
										<?php while($pecah=$ambil->fetch_assoc()){ ?>
								<tr>
									<td><?php echo $nomor; ?></td>
									<td><?php echo $pecah['NIP'] ?></td>
									<td><?php echo $pecah['Nama_guru']; ?></td>
									<td>
										<a href="index.php?page=editguru&nip=<?php echo $pecah['NIP']; ?>" class="btn-info btn-xs"><i class="fa fa-pencil"></i> Edit</a>
										<a href="index.php?page=hapusguru&nip=<?php echo $pecah['NIP']; ?>" class="btn-danger btn-xs"><i class="fa fa-trash"></i> Hapus</a>
									</td>
								</tr>
									<?php $nomor++; ?>
							    	<?php } ?>
							</tbody>
						</thead>
					</table>
				</div>
			</div>
			<div class="panel-footer">
				<a href="index.php?page=tambahguru" class="btn btn-success"><i class="fa fa-plus"></i> Tambah guru</a>
			</div>
		</div>
	</div>
</div>