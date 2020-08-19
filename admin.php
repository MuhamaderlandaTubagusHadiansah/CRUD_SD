<div class="row"> 
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">Data Admin</div>
			<div class="panel-body">
				<div class="table">
					<table class="table table-striped table-bordered table-hover">
						<thead>
							<tr>
								<th>No</th>
								<th>Id Admin</th>
								<th>User Name</th>
								<th>Password</th>
								<th>Nama Lengkap</th>
								<th>Email</th>
							</tr>
						</thead>
						<tbody>
								<?php 
										$nomor=1;
										$ambil=$koneksi->query("SELECT * FROM admin")
								?>
									 	<?php while($pecah=$ambil->fetch_assoc()){ ?>
								<tr class="odd gradeX">
									<td><?php echo $nomor; ?></td>
									<td><?php echo $pecah['id_admin']; ?></td>
									<td><?php echo $pecah['username']; ?></td>
									<td><?php echo $pecah['password']; ?></td>
									<td><?php echo $pecah['nama_lengkap']; ?></td>
									<td><?php echo $pecah['email']; ?></td>
									<td>
										<a href="" class="btn-info btn-xs"><i class="fa fa-pencil"></i> Edit</a>
										<a href="" class="btn-danger btn-xs"><i class="fa fa-trash"></i> Hapus</a>
									</td>
								</tr>
									<?php $nomor++; ?>
									<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
			<div class="panel-footer">
				<a href="" class="btn btn-info"><i class="fa fa-plus"></i> Tambah Admin</a>
			</div>
		</div>
	</div>
</div>