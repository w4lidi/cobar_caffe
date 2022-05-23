<?php 
	include "../../config/koneksi.php";
	$jenismenu = $_POST['jenis_menu'];
	$namamenu = $_POST['nama_menu'];
	$stok = $_POST['stok'];
	$harga = $_POST['harga'];

	//$sql = "INSERT INTO user (id_user, nama_lengkap, level,username,password) VALUES 
	//('','".$namalengkap."','".$level."','".$username."','".$password."')"; (id_menu,id_jenis_menu, nama_menu, stok,harga,created_at)

	$sql = "INSERT INTO menu (id_menu, id_jenis_menu, nama_menu, stok,harga,created_at)
			VALUES('','$jenismenu','$namamenu','$stok','$harga','current_timestamp()')";

	$insert = mysqli_query($kon, $sql);

	//echo "Kode error: ".mysqli_error($kon);

	if ($insert) {
		echo "<script>alert('data berhasil di simpan');
				window.location.href='../../read/data_menu.php';
				</script>";
	}else{
		echo "<script>alert('data gagal di simpan');
				window.location.href='form_in_menu.php';
				</scrip>";

	}



 ?>