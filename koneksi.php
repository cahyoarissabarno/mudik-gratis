<?php 

	$koneksi = mysqli_connect("127.0.0.1", "root", "", "mudik");

	//check koneksi
	if (mysqli_connect_error()){
		echo "Database Tidak Terhubung : " . mysqli_connect_error;
	}

 ?>