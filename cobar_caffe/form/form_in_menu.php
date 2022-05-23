<?php 
	include '../config/koneksi.php';
	$sql = "select * from jenis_menu";
	$read = mysqli_query($kon, $sql);

	if ($_GET) {
		$id_menu = $_GET['id_menu'];
		$jenis_menu = $_GET['jenis_menu'];
		$nama_menu =$_GET['nama_menu'] ;
		$stok = $_GET['stok'];
		$harga = $_GET['harga'];
		$btn_kirim = "<input type='submit' id='btn' name='ubah' value='Simpan Perubahan'>";
		$proses = "<form action='../aksi/edit/ubah_menu.php' method='post'>";
		$title = "Form Edit Menu";

		$sql = "SELECT menu.*, jenis_menu.jenis_menus FROM menu 
				INNER JOIN jenis_menu ON jenis_menu.id_jenis_menu = menu.id_jenis_menu";

		$read_id = mysqli_query($kon, $sql);
		$data = mysqli_fetch_assoc($read_id);
		//echo $data["jenis_menus"]; troble shoot only
		if(!$read){
			echo "gagal read databse". mysqli_error($kon);
		}
	}else{
		$id_menu = "";
		$jenis_menu = "";$nama_menu = "";$stok = "";$harga = "";
		$proses = "<form action='../aksi/save/simpan_menu.php' method='post'>";
		$btn_kirim = "<input type='submit' id='btn' name='simpan' value='Simpan Menu'>";
		$title = "Form Menu";
	}
		//echo "$id_menu"; trouble shoot only
 ?>
 <?php include '../utilitiy/global_var.php'; ?>
<!DOCTYPE html>
<html>
<head>
 	<title>Form Menu | <?php echo $title_page ; ?></title>
 	<?php include '../utilitiy/tag_head.php'; ?>
 </head>
 <body>
 	<?php include '../utilitiy/nav.php'; ?>
	<h3><?php echo $title; ?></h3>
	<?php echo $proses ;?>
	<input type='hidden'  value= '<?php echo $id_menu; ?>'  name='id_menu'>
		<table border="1">
			<tr>
				<td><label for="jenis_menu" >Jenis Menu</label></td>
				<td>:</td>
				<td>
					<select title="ch" name="jenis_menu">
						<?php 
							$s = "";
							foreach ($read as  $value) {
								if($jenis_menu == $value['jenis_menus']){
									$s = "selected";
								}else{
									$s = "";
								}
							echo "<option";
							echo " $s ";
							echo "value='".$value['id_jenis_menu']."'>".$value['jenis_menus']."</option>";
							}
						 ?>
					</select>
					<?php 
					// 	echo "
					// <input type='text' id='nama_lengkap' value='".$nama_lengkap."' placeholder='nama_lengkap' name='nama_lengkap'>";
					 ?>
				</td>
			</tr>
			<tr>
				<td><label for='nama_menu'>Nama Menu</label></td>
				<td>:</td>
				<td>
					<input type='text' id='nama_menu' value='<?php echo $nama_menu; ?>' name='nama_menu'>
				</td>
			</tr>
			<tr>
				<td><label for='stok'>Stok</label></td>
				<td>:</td>
				<td>
					<input type='text' id='stok' value='<?php echo $stok; ?>' name='stok'>
					 
					</td>
			</tr>
			<tr>
				<td>
					<label for='harga'>Harga</label></td>
				<td>:</td>
				<td>
					 <input type='text' id='harga' value= '<?php echo $harga; ?>' name='harga'>
					</td>
			</tr>
			<tr>
				<td colspan="3" style="text-align: center;">
					<?php 
						echo $btn_kirim;
					 ?>
				</td>
			</tr>
		</table>
	</form>
</body>
</html>