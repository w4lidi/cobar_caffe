<?php 
	$host = "localhost";
	$username = "root";
	$password = "";
	$database = "cobar_caffe";

	$kon = mysqli_connect($host, $username, $password, $database);

	if(!$kon){
		echo "gagal" . mysqli_connect_error();
	}
 ?>