<?php include '../utilitiy/global_var.php'; ?>
<!DOCTYPE html>
<html>
<head>
 	<title>Form Jenis Menu |  <?php echo $title_page ; ?></title>
 	<?php include '../utilitiy/tag_head.php'; ?>
 </head>
 <body>
 	<?php include '../utilitiy/nav.php'; ?>

	<?php 
		if ($_GET) {
			include '../config/koneksi.php';
			$id_jenis_menu = $_GET['id_jenis_menu'];
			$jenis_menus = $_GET['jenis_menu'];$status = $_GET['status'];
			$btn_kirim = "<input type='submit' id='btn' name='ubah' value='Simpan Perubahan'>";
			$proses = "<form action='../aksi/edit/ubah_jenis_menu.php' method='post'>";
			$title = "Edit Jenis Menu";
		}else{
			$id_jenis_menu = "";
			$jenis_menus = "";$status = null;
			$proses = "<form action='../aksi/save/simpan_jenis_menu.php' method='post'>";
			$btn_kirim = "<input type='submit' id='btn' name='simpan' value='Simpan'>";
			$title = "Form Jenis Menu";
		}
		//echo "$id_jenis_menu";echo "$status"."v"; trouble shoot only
	?>
	<h3><?php echo $title; ?></h3>

	<?php 
		echo $proses ;
	 	//var_dump($status);
	 ?>
	<input type='hidden'  value='<?php echo $id_jenis_menu; ?>'  name='id_jenismenu'>
	<table border="1">
		<tr>
			<td><label for="jenis_menu" >Jenis Menu</label></td>
			<td>:</td>
			<td>
				<input type='text' id='jenis_menu' value='<?php echo $jenis_menus; ?>' 
				placeholder='Isi Disini' name='jenis_menus'>
			</td>
		</tr>
		<tr>
			<td>Status</td>
			<td>:</td>
			<td>
				<?php
					 if ($status == "1") {
						echo "
							<input type='radio' checked='' id='tersedia' name='status' value='1'>
							<label for='tersedia'>tersedia</label>
							<input type='radio'   id='tak_tersedia' name='status' value='0'>
							<label for='tak_tersedia'>Tidak Tersedia</label>";
					}elseif ($status == "0") {
						echo "
							<input type='radio'  id='tersedia' name='status' value='1'>
							<label for='tersedia'>Tersedia</label>
							<input type='radio' checked='' id='tak_tersedia' name='status' value='0'>
							<label for='tak_tersedia'>Tidak Tersedia</label>";
					}elseif($status == null){
						echo "
							<input type='radio'  id='tersedia' name='status' value='1'>
							<label for='tersedia'>Tersedia</label>
							<input type='radio' id='tak_tersedia' name='status' value='0'>
							<label for='tak_tersedia'>Tidak tersedia</label>";
					}
				?>	
			</td>
		</tr>
		<tr>
			<td colspan="3" style="text-align: center;">	
				<?php echo $btn_kirim; ?>
			</td>
		</tr>
	</table>
</form>
</body>
</html>