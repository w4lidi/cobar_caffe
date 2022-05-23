	<?php 
	include '../../config/koneksi.php';

	echo "<br>";
	$id = $_GET['id_user'];
	$tbl = $_GET['tbl'];
	$whr = $_GET['whr'];
	$redir = "";

	if ($whr == 'id_user') {
		$redir = "read";
	}
	else if ($whr == 'id_menu') {
		$redir = "data_menu";
	}
	else if ($whr == 'id_jenis_menu') {
		$redir = "read_jenis_menu";
	}

	$sql = "DELETE FROM $tbl WHERE $whr = '$id'";

	$del = mysqli_query($kon, $sql);

	// ini untuk trouble shoot saja  disable js redirect jika baris ini di gunakan
	//echo "$sql"; //untuk perintah sql query
	//$error_msg = mysqli_error($kon); // tampung error message
	//echo "$error_msg"; // tampilan error ms]essage

	//javascrip redirect
	if($del){
		echo "<script>alert('Data Berhasil di Hapus ');
		window.location.href='../../read/".$redir.".php';</script>";
	}else{
		echo "<script>alert('Data Gagal di Hapus ');
		window.location.href='../../read/".$redir.".php';</script>";
	}


 ?>