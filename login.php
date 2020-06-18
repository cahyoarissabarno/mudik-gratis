<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form1.css">
</head>
<body>
	<!-- cek pesan notifikasi -->
	<fieldset style="width: 40%;">
    <legend><h1 style="background-color: #575757; padding: 10px; color: white; border-radius: 14px;">LOGIN</h1></legend>
   <div class="underline"></div>
   <br>

	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo '<p style="color:red;"> Login gagal! nik atau password salah</p>';
		}else if($_GET['pesan'] == "belum_login"){
			echo '<p style="color:red;">Anda harus login dulu !</p>';
		}
	}
	?>
 
    <form method="post" action="post_login.php" class="form-signin"  autocomplete="off">
        <label class="kiri">NIK</label>
        <input type="text" id="inputEmail" name="nik" placeholder="Masukkan nik" class="kanan" required>
        <br><br>
        <label class="kiri">Password</label>
        <input type="password" id="inputPassword" name="password" placeholder="Masukkan password" class="kanan" required>
        <br><br>
        <input type="submit" value="LOGIN" class="button">
    </form>
</fieldset>
</body>
</html>