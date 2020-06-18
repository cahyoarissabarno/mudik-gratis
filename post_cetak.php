<?php
// mengaktifkan session php
 
// menghubungkan dengan koneksi
include 'koneksi.php';
include 'cetak.php';

$nu=$nik_user;
 
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi,"select * from form where nik='$nu'");
$d = mysqli_fetch_array($data);
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
 
if($cek != 0){
		$_SESSION['kode'] = $d['kode'];
		$_SESSION['nama'] = $d['nama'];
		$_SESSION['nik'] = $d['nik'];
		$_SESSION['alamat'] = $d['alamat'];
		$_SESSION['hp'] = $d['hp'];
		$_SESSION['rute'] = $d['rute'];
		$_SESSION['tanggal'] = $d['tanggal'];
		header("location:convert.php");

}else{
	header("location:login.php?pesan=gagal");
}
?>