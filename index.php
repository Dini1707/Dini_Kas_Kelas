<?php

include "header.php";
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
<link rel="stylesheet" href="style.css">
<body style=" background-color: #7FA2BB;">
<img src="img/logo.png" alt="" class="logo"><br>
       <p ><h5 class="judul">Harap Input  Username Dan Password</h5></p>
       <!-- <form action="cek_login.php" method='post'>
        <input type="text" class="input1" id="username" placeholder="E-mail/UserName" name="username" required>
        <input type="password" class="input2" id="password" placeholder="Password" name="password" required>
        <input class="button" type="submit" name="submit" value="login">
       </form> -->

	   <div class="row justify-content-center">
		<div class="col-2">
		<form action="cek_login.php" method='post'>
  <div class="mb-4 pt-4" >
    <input placeholder="E-mail/Username" name="username" type="text" class="form-control border border-dark shadow" id="exampleInputEmail1" aria-describedby="emailHelp" required style="height:50px; border-radius:15px;">
  </div>
  <div class="mb-4">
    <input placeholder="Password" name="password" type="password" class="form-control  border border-dark shadow" id="exampleInputPassword1 " required style="height:50px; border-radius:15px;">
  </div>
	<div class="float-end">
	<input type="submit" name="submit" id="submit" value="Login"  class="button">

	</div>
</form>
		</div>
	   </div>

</body>

<?php

include "footer.php";
?>
