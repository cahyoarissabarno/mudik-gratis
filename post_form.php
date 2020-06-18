<?php 
// koneksi database
include 'koneksi.php';
include 'home.php';
 
// menangkap data yang di kirim dari form
$nama = $du['username'];
$nik = $du['nik'];
$alamat = $_POST['alamat'];
$hp = $_POST['hp'];
$rute = $_POST['rute'];
$tanggal = $_POST['tanggal'];
$kode = md5($nik);
$status = "submit";
// menginput data ke database
mysqli_query($koneksi,"insert into form values('$nik','$nama','$alamat','$hp', '$rute', '$tanggal', '$kode')");
mysqli_query($koneksi,"update user set status = 'submit' where id='$id_user'");
 
session_destroy();
header("location:login.php");
 
?>