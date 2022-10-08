<?php 
 if ($_POST){
 	$nama=$_POST['nama'];
 	$nim=$_POST['nim'];
 	$alamat = $_POST['almat'];
	$username = $_POST['user'];
	$password = $_POST['pass'];

 		if (empty($nama)) {
			echo "<script>alert('nama mahasiswa tidak boleh kosong');location.href='tambahmahasiswa.php';</script>";
 		} elseif (empty($nim)) {
 			echo "<script>alert('nim mahasiswa tidak boleh kosong');location.href='tambahmahasiswa.php';</script>";
 		}elseif (empty($alamat)) {
			echo "<script>alert('Alamat mahasiswa tidak boleh kosong');location.href='tambahmahasiswa.php';</script>";
		}elseif (empty($username)) {
			echo "<script>alert('Username tidak boleh kosong');location.href='tambahmahasiswa.php';</script>";
		}elseif (empty($password)) {
			echo "<script>alert('Password tidak boleh kosong');location.href='tambahmahasiswa.php';</script>";
 		}else{
 			include "koneksi.php";
 			$insert=mysqli_query($koneksi,"insert into t_mahasiswa (nama, nim, alamat, username, password)
 			value ('".$nama."','".$nim."','".$alamat."','".$username."','".$password."')") or die(mysqli_error($koneksi));

			 if ($insert) {
 			echo "<script>alert('Sukses menambahkan data mahasiswa');location.href='datamahasiswa.php';</script>";
	 		}else{
 			echo "<script>alert('Gagal menambahkan siswa');location.href='tambahmahasiswa.php';</script>";

 	}

 }
}
 ?>