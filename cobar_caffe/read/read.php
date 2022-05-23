<?php 
	include("../config/koneksi.php");
	include ("../utilitiy/global_var.php");
	$sql = "SELECT * FROM user";
	$read = mysqli_query($kon, $sql);
	if(!$sql){
		echo "gagal read ". mysql_error();
	}
	//var_dump($read);
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Data User | <?php echo $title_page; ?></title>
 	<?php include '../utilitiy/tag_head.php'; ?>
 </head>
 <body>
 	<?php include '../utilitiy/nav.php'; ?>
 	<h3>Data User</h3>
 	<table border="1">
 		<tr>
 			<th>No.</th>
 			<th>ID User</th>
 			<th>Nama Lengkap</th>
 			<th>UserName</th>
 			<th>Level</th>
 			<th>Password</th>
 			<th colspan="2">Aktion</th>
 		</tr>	 		
		<?php 
			$i = 1;
			foreach ($read as $value) {
				echo "<tr>";
					echo "<td>".$i."</td>";
					echo "<td>".$value['id_user']."</td>";
					echo "<td>".$value['nama_lengkap']."</td>";
					echo "<td>".$value['username']."</td>";
					echo "<td>".$value['level']."</td>";
					echo "<td>".$value['password']."</td>";
					echo "<td>
							<a href='../form/form_register.php?
							id_user=".$value['id_user']."&
							nama_lengkap=".$value['nama_lengkap']."&
							username=".$value['username']."&
							level=".$value['level']."&
							password=".$value['password']."'>Edit</a>
						</td>";
					echo "<td>
							<a href='../aksi/hapus/hapus.php?
							id_user=".$value['id_user']."&
							tbl=user&whr=id_user'>Hapus</a>
						</td>";
				echo "</tr>";
				$i++;
			}
		 ?>
 	</table>
 </body>
 </html>