<?php

include "boot.php";
?>
<?php
session_start();
$username = 'admin';
$password = 'admin';
if (isset($_POST['submit'])){
  if ($_POST['username'] == $username && $_POST ['password'] == $password){
    $_SESSION["username"] == $username;
    echo "Login Sukses $username";
  }else{

    login();
    echo 'Login Gagal';

  }
}else{
  login();
}

function login(){ ?>
<img src="logo.png" alt="" class="logo"><br>
       <p ><h5 class="judul">Harap Input  Username Dan Password</h5></p>
       <form action="<?php echo $_SERVER['PHP_SELF'];?>" method='post'>
        <input type="text" class="input1" id="username" placeholder="E-mail/UserName" name="username">
        <input type="password" class="input2" id="password" placeholder="Password" name="password">
        <input class="button" type="submit" name="submit" value="login">
       </form>
<?php }?>