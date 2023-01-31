<?php

include "boot.php";
?>

<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
	}
	?>

<img src="img/logo.png" alt="" class="logo"><br>
       <p ><h5 class="judul">Harap Input  Username Dan Password</h5></p>
       <form action="cek_login.php" method='post'>
        <input type="text" class="input1" id="username" placeholder="E-mail/UserName" name="username">
        <input type="password" class="input2" id="password" placeholder="Password" name="password">
        <input class="button" type="submit" name="submit" value="login">
       </form>
