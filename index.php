<?php
$username ='admin';
$password ='admin';
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   

  </head>
  <body style=" background-color: #8AB5B2;">
       <img src="logo.png" alt="" class="logo"><br>
       <p ><h5 class="judul">Harap Input  Username Dan Password</h5></p>
       <form action="POST">
        <input type="text" class="input1" id="username" placeholder="E-mail/UserName" name="username">
        <input type="text" class="input2" id="password" placeholder="Password" name="password">

       </form>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

       <button type="button" class="button">Login</button>
  </body>
</html>




