<?php
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'koneksi.php';
 
// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = md5($_POST['password']);
$nik = $_POST['nik'];
 
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi,"select * from user where nik='$nik'");
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
 
if($cek == 0){
	$_SESSION['status'] = "login";

	mysqli_query($koneksi,"insert into user values('','$username','$password','$nik','not submit')");
 
// mengalihkan halaman kembali ke home.php
	header("location:login.php");

}else{
	header("location:register.php?pesan=gagal");
}
?>