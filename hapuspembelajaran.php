<?php  
	$ambil = $koneksi->query("SELECT * FROM t_pembelajaran WHERE NIS='$_GET[nis]'");
	$pecah = $ambil->fetch_assoc();
	$koneksi->query("DELETE FROM t_pembelajaran WHERE NIS = '$_GET[nis]'");

	echo "<script>alert('pembelajaran terhapus');</script>";
	echo "<script>location='index.php?page=pembelajaran';</script>";

 ?> 