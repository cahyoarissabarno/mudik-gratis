<?php
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'koneksi.php';
 
// menangkap data yang dikirim dari form
$password = md5($_POST['password']);
$nik = $_POST['nik'];
 
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi,"select * from user where nik='$nik' and password='$password'");
$d = mysqli_fetch_array($data);
$user_status = $d['status'];
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
 
if($cek != 0){
	if($user_status != 'submit'){
		$_SESSION['status'] = "login";
		$_SESSION['id'] = $d['id'];
		header("location:home.php");

	}else{
		$_SESSION['status'] = "submit";
		$_SESSION['nik'] = $nik ;
		header("location:cetak.php");
	}

}else{
	header("location:login.php?pesan=gagal");
}
?>