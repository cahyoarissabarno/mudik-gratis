<!DOCTYPE html>
<html>
<head>
	<title>index</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form1.css">
</head>
<body class="text-center">
	<!-- cek apakah sudah login -->
	<?php 
	session_start();
	if($_SESSION['status']!="submit"){
		header("location:login.php?pesan=belum_login");
	}

	include 'koneksi.php';
	$nik_user = $_SESSION['nik'];
	$data_user = mysqli_query($koneksi,"select * from form where nik='$nik_user'");
	$du = mysqli_fetch_array($data_user);
	?>

	<fieldset>
	<h3 style="margin-top: 50px;">TIKET MUDIK GRATIS 2020</h3><br>
	<h4>Selamat datang, <?php echo $du['nama']; ?>! Anda Telah Mendaftar Program Mudik Gratis 2020</h4><br/>
	<p>Silahkan Mencetak Bukti Pendaftaran Anda</p>
	<form method="post" action="post_cetak.php">
		<input type="submit" value="CETAK">
	</form><br><br>
	<a href="logout.php">LOGOUT</a>
	<br><br>
</fieldset>
	
</body>
</html>

 