<?php  
	$ambil = $koneksi->query("SELECT * FROM t_siswa WHERE NIS='$_GET[nis]'");
	$pecah = $ambil->fetch_assoc();
	$koneksi->query("DELETE FROM t_siswa WHERE NIS = '$_GET[nis]'");

	echo "<script>alert('siswa terhapus');</script>";
	echo "<script>location='index.php?page=siswa';</script>";

 ?> 