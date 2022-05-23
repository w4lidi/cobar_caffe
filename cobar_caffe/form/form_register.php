<?php 
	include '../utilitiy/global_var.php';
 ?>
<!DOCTYPE html>
<html>
<head>
 	<title>Form Register | <?php echo $title_page  ?></title>
 	<?php include '../utilitiy/tag_head.php'; ?>
 </head>
 <body>
 	<?php include '../utilitiy/nav.php'; ?>

	<?php 
	if ($_GET) {
		include '../config/koneksi.php';
		$id_user = $_GET['id_user'];
		$nama_lengkap = $_GET['nama_lengkap'];
		$level = $_GET['level'];
		$username = $_GET['username'];
		$password = $_GET['password'];
		$btn_kirim = "<input type='submit' id='btn' name='ubah' value='Simpan Perubahan'>";
		$proses = "<form action='../aksi/edit/ubah.php' method='post'>";
		$titlehead = "Form Edit Data User";
	}
	else{
		$id_user = "";
		$nama_lengkap = "";$level = "";$username = "";$password = "";
		$proses = "<form action='../aksi/save/simpan_register.php' method='post'>";
		$btn_kirim = "<input type='submit' id='btn' name='simpan' value='Simpan'>";
		$titlehead = "Form Register";
	}

	 //echo "User Id sekarang adalah $id_user"; // Untuk keperluan troubleshoot
	 ?>
	<h3><?php echo $titlehead; ?></h3>
	<?php 
		echo $proses ;
	 	echo "<input type='hidden'  value='".$id_user."'  name='id_user'>";
	 ?>
	<table border="1">
		<tr>
			<td><label for="nama_lengkap" >Nama Lengkap</label></td>
			<td>:</td>
			<td>
				<input type='text' id='nama_lengkap' value= '<?php echo $nama_lengkap; ?>' 
				placeholder='Isi Disini' name='nama_lengkap'>
			</td>
		</tr>
		<tr>
			<td><label for='level'>Level</label></td>
			<td>:</td>
			<td>
				<input type='text' id='level' value= '<?php echo $level; ?>' name='level'>
			</td>
		</tr>
		<tr>
			<td><label for='username'>Username</label></td>
			<td>:</td>
			<td>
				<input type='text' id='username' value= '<?php echo $username; ?>' name='username'>
			</td>
		</tr>
		<tr>
			<td>
				<label for='password'>Password</label></td>
			<td>:</td>
			<td>
				 <input type='text' id='password' value= '<?php echo $password; ?>' name='password'>
			</td>
		</tr>
		<tr>
			<td colspan="3" style="text-align: center;">
				<?php echo $btn_kirim;?>
			</td>
		</tr>
</table>


</form>
</body>
</html>