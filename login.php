<?php

include "header.php";
?>


<link rel="stylesheet" href="style.css">
<body style=" background-color: #7FA2BB;">
<img src="img/logo.png" alt="" class="logo"><br>
       <p ><h5 class="judul">Harap Input  Username Dan Password</h5></p>
       

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
