<?php 
	include "../../config/koneksi.php";
	$jenismenu = $_POST['jenis_menus'];
	$status = $_POST['status'];
	// $stok = $_POST['stok'];
	// $harga = $_POST['harga'];

	//$sql = "INSERT INTO user (id_user, nama_lengkap, level,username,password) VALUES 
	//('','".$namalengkap."','".$level."','".$username."','".$password."')"; (id_menu,id_jenis_menu, nama_menu, stok,harga,created_at)

	$sql = "INSERT INTO jenis_menu (id_jenis_menu, jenis_menus, status, create_at) 
			VALUES('','$jenismenu','$status','current_timestamp()')";

	$insert = mysqli_query($kon, $sql);

	echo "Kode error: ".mysqli_error($kon);

	if ($insert) {
		echo "<script>alert('Data Berhasil di Simpan');
				window.location.href='../../read/read_jenis_menu.php';
				</script>";
	}else{
		echo "<script>alert('Data Gagal di Simpan');
				window.location.href='../../read/form_in_jenis_menu.php';
				</script>";
	}
 ?>