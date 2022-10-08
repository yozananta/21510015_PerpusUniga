<?php
	$id = $_GET['id_mahasiswa'];

	include "koneksi.php";
	$delete = mysqli_query($koneksi,"DELETE FROM t_mahasiswa Where id_mahasiswa = $id") or die (mysqli_error($koneksi));
	if ($delete) {
		echo "<script>alert('Data berhasil dihapus');location.href='datamahasiswa.php';</script>";
	}else{
		echo "<script>alert('Data gagal dihapus');location.href='tambahmahasiswa.php';</script>";
	}
?>