<?php 
	include "../../config/koneksi.php";
	$namalengkap = $_POST['nama_lengkap'];
	$level = $_POST['level'];
	$username = $_POST['username'];
	$password = md5($_POST['password']);

	//$sql = "INSERT INTO user (id_user, nama_lengkap, level,username,password) VALUES 
	//('','".$namalengkap."','".$level."','".$username."','".$password."')";

	$sql = "INSERT INTO user (id_user, nama_lengkap, level,username,password) VALUES 
	('','$namalengkap','$level','$username','$password')";

	$insert = mysqli_query($kon, $sql);

	if ($insert) {
		echo "<script>alert('Data Berhasil di Simpan');
				window.location.href='../../read/read.php';
				</script>";
	}else{
		echo "<script>alert('Data Gagal di Simpan');
				window.location.href='../../read/form_register.php';
				</script>";
	}
 ?>