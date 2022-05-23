<?php 
	include "../../config/koneksi.php";
	$id = $_POST['id_menu'];
	$jenis_menu = $_POST['jenis_menu'];
	$nama_menus = $_POST['nama_menu'];
	$stok = $_POST['stok'];
	$harga = $_POST['harga'];

	//$sql = "INSERT INTO user (id_user, nama_lengkap, level,username,password) VALUES 
	//('','".$namalengkap."','".$level."','".$username."','".$password."')";

	/*$sql = "INSERT INTO user (id_user, nama_lengkap, level,username,password) VALUES 
	('','$namalengkap','$level','$username','$password')";
	*/

	$sql = "UPDATE menu 
			SET id_jenis_menu='$jenis_menu',nama_menu='$nama_menus',stok='$stok',harga='$harga' 
			WHERE id_menu = '$id'";

	$insert = mysqli_query($kon, $sql);

	if ($insert) {
		echo "<script>alert('Data Berhasil di Simpan');
		window.location.href='../../read/data_menu.php';
		</script>";

	}else{
		echo "<script>alert('Data Gagal di Simpan');
		window.location.href='../../read/data_menu.php';
		</scrip>";

	}
 ?>