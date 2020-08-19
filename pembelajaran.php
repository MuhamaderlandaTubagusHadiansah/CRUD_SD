<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">Data Pembelajaran</div>
			<div class="panel-body">
				<div class="table">
					<table class="table table-striped table-bordered table-hover">
						<thead>
							<tr>
								<th>No</th>
								<th>NIS</th>
								<th>Kode_pel</th>
								<th>NIP</th>
								<th>Nilai</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php
							 	$nomor=1;
							 	$ambil=$koneksi->query("SELECT * FROM t_pembelajaran"); 
							?>
									<?php while($pecah = $ambil->fetch_assoc()) { ?>
							<tr>
								<td><?php echo $nomor; ?></td>
								<td><?php echo $pecah['NIS']; ?></td>
								<td><?php echo $pecah['Kode_pel']; ?></td>
								<td><?php echo $pecah['NIP']; ?></td>
								<td><?php echo $pecah['Nilai']; ?></td>
								<td>
									<a href="index.php?page=editpembelajaran&nis=<?php echo $pecah['NIS']?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> edit</a>
									<a href="index.php?page=hapuspembelajaran&nis=<?php echo $pecah['NIS']?>" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Hapus</a>
								</td>
							</tr>
									<?php $nomor++; ?>
									<?php } ?>
						</tbody>
					</table>
				</div>
				<div class="panel-footer">
					<a href="index.php?page=tambahpembelajaran" class="btn btn-success"><i class="fa fa-plus"></i> Tambah pembelajaran</a>
				</div>				
			</div>
		</div>
	</div>
</div>