<?php  
	$ambil = $koneksi->query("SELECT * FROM t_guru WHERE NIP ='$_GET[nip]'");
	$pecah = $ambil->fetch_assoc();
	$koneksi->query("DELETE FROM t_guru WHERE NIP = '$_GET[nip]'");

	echo "<script>alert('guru terhapus');</script>";
	echo "<script>location='index.php?page=guru';</script>";

 ?> 