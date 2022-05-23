<?php 
	include("../config/koneksi.php");
	include ("../utilitiy/global_var.php");

	$sql = "SELECT menu.*, jenis_menu.jenis_menus FROM menu 
			INNER JOIN jenis_menu ON jenis_menu.id_jenis_menu = menu.id_jenis_menu";

	$read = mysqli_query($kon, $sql);

	if(!$read){
		echo "gagal read database". mysqli_error($kon);
	}

	//var_dump($read);
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Data Menu | <?php echo $title_page; ?></title>
 	<?php include '../utilitiy/tag_head.php'; ?>
 </head>
 <body>
 	<?php include '../utilitiy/nav.php'; ?>
 	<h3>Data Menu</h3>
 	<table border="1">
 		<tr>
 			<th>No.</th>
 			<th>Jenis menu</th>
 			<th>Nama menu</th>
 			<th>stok</th>
 			<th>harga</th>
 			<!-- <th></th> -->
 			<th>Aktion</th>
 		</tr>
		<?php 
			$i = 1;
			foreach ($read as $value) {
				echo "<tr>";
					echo "<td>".$i."</td>";
					echo "<td>".$value['jenis_menus']."</td>";
					echo "<td>".$value['nama_menu']."</td>";
					echo "<td>".$value['stok']."</td>";
					echo "<td>".$value['harga']."</td>";
					echo "<td>
							<a href='../form/form_in_menu.php?
							id_menu=".$value['id_menu']."&
							jenis_menu=".$value['jenis_menus']."&
							nama_menu=".$value['nama_menu']."&
							stok=".$value['stok']."&
							harga=".$value['harga']."'>Edit</a>
						</td>";
					 echo "<td>
					 		<a href='../aksi/hapus/hapus.php?
					 		id_user=".$value['id_menu']."&
					 		tbl=menu&
					 		whr=id_menu'>Hapus</a>
					 	</td>";
				echo "</tr>";
				$i++;
			}
		 ?>


 	</table>
 </body>
 </html>