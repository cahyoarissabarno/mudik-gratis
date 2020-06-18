<?php 

$dbhost = "localhost";
$dbuser = "root";
$dbpswd = "";
$dbname = "mudikDB";

//buat koneksi ke database
$conn = new mysqli($dbhost, $dbuser, $dbpswd, $dbname);

//buat database
$penumpang = "create table penumpang(

id int(5) auto_increment primary key,
nama varchar(50) not null,
email varchar(50) not null

)";

$akun = "create table akun(

id int(5) auto_increment primary key,
nama varchar(50) not null,
email varchar(50) not null

)";

if ($conn->query($penumpang)===true) {
	echo "Tabel PENUMPANG berhasil dibuat";
}
else{
	echo "Tabel PENUMPANG gagal dibuat : ".$conn->error;
}

if ($conn->query($akun)===true) {
	echo "Tabel AKUN berhasil dibuat";
}
else{
	echo "Tabel AKUN gagal dibuat : ".$conn->error;
}

$conn->close();
 ?>