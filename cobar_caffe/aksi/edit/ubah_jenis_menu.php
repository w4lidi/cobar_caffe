<?php 
	include "../../config/koneksi.php";
	$id = $_POST['id_jenismenu'];
	$jenismenu = $_POST['jenis_menus'];
	$status = $_POST['status'];

	//$sql = "INSERT INTO user (id_user, nama_lengkap, level,username,password) VALUES 
	//('','".$namalengkap."','".$level."','".$username."','".$password."')";

	/*$sql = "INSERT INTO user (id_user, nama_lengkap, level,username,password) VALUES 
	('','$namalengkap','$level','$username','$password')";
	*/

	$sql = "UPDATE jenis_menu SET jenis_menus='$jenismenu',status='$status' WHERE id_jenis_menu = '$id'";

	$insert = mysqli_query($kon, $sql);

	if ($insert) {
		echo "<script>alert('Data Berhasil di Simpan');
		window.location.href='../../read/read_jenis_menu.php';
		</script>";

	}else{
		echo "<script>alert('Data Gagal di Simpan');
		window.location.href='../../read/read_jenis_menu.php';
		</scrip>";

	}
 ?>