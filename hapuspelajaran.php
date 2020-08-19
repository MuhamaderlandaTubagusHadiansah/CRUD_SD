<?php  
	$ambil = $koneksi->query("SELECT * FROM t_pelajaran WHERE kode_pel='$_GET[kp]'");
	$pecah = $ambil->fetch_assoc();
	$koneksi->query("DELETE FROM t_pelajaran WHERE kode_pel = '$_GET[kp]'");

	echo "<script>alert('pelajaran terhapus');</script>";
	echo "<script>location='index.php?page=pelajaran';</script>";

 ?> 