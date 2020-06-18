<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form1.css">
</head>
<body>
	<fieldset style="width: 40%;">
        <legend><h1 style="background-color: #575757; padding: 10px; color: white; border-radius: 14px;">REGISTRASI AKUN</h1></legend>
       <div class="underline"></div>
       <br>
       
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo '<p style="color:red;">Daftar gagal! nik telah terpakai</p>';
		// }else if($_GET['pesan'] == "logout"){
		// 	echo "Anda telah berhasil logout";
		// }else if($_GET['pesan'] == "belum_login"){
		// 	echo "Anda harus login untuk mengakses halaman admin";
		}
	}
	?>
    
        <form method="post" action="post_register.php" class="form-signin"  autocomplete="off">
            <label class="kiri">Nama Lengkap</label>
            <input type="text" id="nama" name="username" placeholder="Masukkan Nama Lengkap Anda" class="kanan" required>
            <br><br>
            <label class="kiri">NIK</label>
            <input type="text" id="inputEmail" name="nik" placeholder="Masukkan nik" class="kanan" required>
            <br><br>
            <label class="kiri">Password</label>
            <input type="password" id="inputPassword" name="password" placeholder="Masukkan password" class="kanan" required>
            <br><br>
            <input type="submit" value="DAFTAR" class="button">
        </form>
    </fieldset>
</body>
</html>