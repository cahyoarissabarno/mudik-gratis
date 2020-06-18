<?php 

$dbhost = "localhost";
$dbuser = "root";
$dbpswd = "";

//buat koneksi ke database
$conn = new mysqli($dbhost, $dbuser, $dbpswd);

//buat database
$crdb = "create database mudikDB";
if ($conn->query($crdb)===true) {
	echo "Databse berhasil dibuat";
}
else{
	echo "Databse gagal dibuat : ".$conn->error;
}

$conn->close();
 ?>