<div class="row">
	<div class="col-md-12">
		<div class="box">
			<div class="box-header">
				<h3 class="box-title" style="padding-top:0; margin-top:0; color:#f00;">Tambah Transaksi Penjualan</h3>
				<form method = "post" enctype="multipart/form-data">
          <div class="form-group">
						<label>Kode Penjualan</label>
						<input type="text" class="form-control"  name="kdpenjualan" placeholder="Masukan Kode Penjualan, Ex: PEN0001" maxlength="8">
					</div>
					<div class="form-group">
            <label>Tanggal Penjualan</label>
            <input type="date" class="form-control" name="tglpenjualan">
          </div>
					<div class="form-group">
						<label>Kode Customer</label>
						<input type="text" class="form-control" name="kdcustomer" placeholder="Masukan Kode Customer, Ex: C0001">
					</div>
					<div class="form-group">
						<label>Nama Customer</label>
						<input type="text" class="form-control" name="namacustomer"placeholder="Masukan Nama Customer">
					</div>
          <div class="form-group">
            <label>Kode Produk</label>
            <input type="text" class="form-control" name="kdproduk" placeholder="Masukan Kode Produk, Ex: B0001">
					</div>
          <div class="form-group">
            <label>Nama Produk</label>
            <input type="text" class="form-control" name="namaproduk" placeholder="Masukan Nama Produk">
          </div>
          <div class="form-group">
            <label>Jumlah</label>
            <input type="text" class="form-control" name="jumlah" placeholder="Masukan Jumlah Produk">
          </div>
          <div class="form-group">
            <label>Satuan</label>
            <input type="text" class="form-control" name="satuan" placeholder="Masukan Satuan Produk, Ex: PCS, DUS">
          </div>
          <div class="form-group">
            <label>Harga Satuan</label>
            <input type="number" class="form-control" name="hargasatuan" placeholder="Masukan Harga Satuan" max="10000000" min="0">
          </div>
          <div class="form-group">
            <label>Harga Total</label>
            <input type="number" class="form-control" name="stok" placeholder="Masukan Harga Total" max="10000000" min="0">
          </div>
					<button class="btn btn-primary" name="save"><i class="fa fa-save"></i> Simpan</button>
					<a href="index.php?page=penjualan" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Kembali ke Penjualan</a>
				</form>
				<?php
				if (isset($_POST['save'])) {
				 	# code...
				 	$koneksi->query("INSERT INTO produk
				 		(kd_produk,nama_produk,satuan,harga,stok,deskripsi_produk) VALUES ('$_POST[kdproduk]','$_POST[nama]','$_POST[satuan]','$_POST[harga]','$_POST[stok]','$_POST[deskripsi]')");

				 	echo "<script>alert('Data Produk Berhasil Disimpan');</script>";

				 } 
				 ?>
			</div>
		</div>
	</div>
</div>