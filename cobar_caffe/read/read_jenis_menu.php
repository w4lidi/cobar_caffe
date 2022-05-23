<?php 
	include ("../utilitiy/global_var.php");
	include("../config/koneksi.php");

	$sql = "SELECT * FROM jenis_menu";

	$read = mysqli_query($kon, $sql);

	if(!$sql){
		echo "gagal read database". mysql_error();
	}

	//var_dump($read);
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Data Jenis Menu | <?php echo $title_page; ?></title>
 	<?php include '../utilitiy/tag_head.php'; ?>
 </head>
 <body>
 	<?php include '../utilitiy/nav.php'; ?>
 	<h3>Data Jenis Menu</h3>
 	<table border="1">
 		<tr>
 			<th>No.</th>
 			<th>ID jenis Menu</th>
 			<th>jenis menu</th>
 			<th>status</th>
 			<th colspan="2">Aktion</th>
 		</tr>
		<?php 
			$i = 1;
			foreach ($read as $value) {
				echo "<tr>";
					echo "<td>".$i."</td>";
					echo "<td>".$value['id_jenis_menu']."</td>";
					echo "<td>".$value['jenis_menus']."</td>";
					if ($value['status'] == 1 ) {
						echo "<td>Tersedia</td>";
					}
					else{
						echo "<td> Tidak Tersedia</td>";
					}
					echo "<td>
							<a href='../form/form_in_jenis_menu.php?
							id_jenis_menu=".$value['id_jenis_menu']."&
							jenis_menu=".$value['jenis_menus']."&
							status=".$value['status']."'>Edit</a>
						</td>";
					echo "<td>
							<a href='../aksi/hapus/hapus.php?id_user=".$value['id_jenis_menu']."&
							tbl=jenis_menu&
							whr=id_jenis_menu'>Hapus</a>
						</td>";
				echo "</tr>";
				$i++;
			}
		 ?>
	</table>
 </body>
 </html>