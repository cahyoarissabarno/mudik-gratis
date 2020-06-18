<!DOCTYPE html>
<html>
<head>
	<title>index</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="form1.css">
</head>
<body>
	<!-- cek apakah sudah login -->
	<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:login.php?pesan=belum_login");
	}

	include 'koneksi.php';
	$id_user = $_SESSION['id'];
	$data_user = mysqli_query($koneksi,"select * from user where id='$id_user'");
	$du = mysqli_fetch_array($data_user);
	?>
	<fieldset style="width: 40%;">
            <legend><h1 style="background-color: #575757; padding: 10px; color: white; border-radius: 14px;">Formulir</h1></legend>
           <br>
     <h3>Selamat Datang <?php echo $du['username']; ?> !, Silahkan Lengkapi Formulir Anda.</h4>
	<button style="color: white; background-color: red; width: 80px;height: 40px; border-radius: 50px;">
		<a href="logout.php" style="text-decoration: none; color: white;">LOGOUT</a>
	</button>
	<br><br><br>
	<form method="post" action="post_form.php"autocomplete="off">
		<label class="kiri">Nama Lengkap : </label>
		<input type="text" name="nama" disabled value=
				" <?php 
					echo $du['username'];
				 ?> " 
				class="kanan" ><br><br>
		<label class="kiri">NIK : </label>
		<input type="text" name="nik" disabled value=
				" <?php 
					echo $du['nik'];
				 ?> "
				class="kanan" ><br><br>
		<label class="kiri">Alamat : </label>
		<input type="text" name="alamat" class="kanan" required><br><br>
		<label class="kiri">No. HP : </label>
		<input type="text" name="hp" class="kanan" required><br><br>
		<label class="kiri">Rute Perjalanan : </label>
		<select name="rute" class="kanan">
			<option value="SURABAYA-JAKARTA">SURABAYA-JAKARTA</option>
			<option value="SURABAYA-MALANG">SURABAYA-MALANG</option>
			<option value="SURABAYA-JOGJA">SURABAYA-JOGJA</option>
		</select><br><br>
		<label class="kiri">Tanggal Keberangkatan : </label>
		<select name="tanggal" class="kanan">
			<option value="20 Mei 2020">20 Mei 2020</option>
			<option value="18 Mei 2020">18 Mei 2020</option>
			<option value="19 Mei 2020">19 Mei 2020</option>
		</select><br><br>
		<p style="color: red;">Pastikan Data Yang Anda Isi Benar. Data Tidak Bisa Dirubah Kembali</p><br>

		<script>
			function konfirm(){
			document.getElementById("yes").style.display = 'none';
			document.getElementById("konfirm").style.display = 'block';
			}
		</script>

		<input type="submit" value="SUBMIT" class="button" id="konfirm" style="display: none;">
	</form>
	<input type="submit" onclick="konfirm()" class="button" id="yes" style="width: 200px; display:''; font-size: 15px; color: black; margin-left: 50px;"  value="Iya, data saya telah sesuai">
	</div>
</body>
</html>