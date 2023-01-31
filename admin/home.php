<?php

session_start();

if ($_SESSION ['level'] ="") {
  header("location: . ./index.php");
  # code...
}

if ($_SESSION ['level'] =="admin") {
  header("location: ../admin/home.php");
  # code...
}

echo $_SESSION['level'];


if (isset($_GET ['admin'])) {
    $page = $_GET['admin'];

    switch ($page) {
        case 'tr':
            # code...
            break;
        case 'value':
            # code...
            break;
        
        default:
            # code...
            break;
    }
    # code...
}
?>

<link rel="stylesheet" href="../style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<div class="sidebar">
      <div class="sidebar">
       <nav id="sidebarMenu" class="col-md-2 col-lg-2 d-md-block sidebar collapse" style="color: black">
       <a class="navbar-brand" href="#"><img src="../img/profile.png" alt=""></a>
          <div class="sidebar-sticky pt-3">
            <ul class="navbar-nav flex-column" style="margin-top:20% ;">
              <li class="nav-item ">
                <a class="nav-link " href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                  <img src="../img/home 2.png" class="icon" alt="" />
                </a>
                
              </li>
              <li class="nav-item">
                <a class="nav-link" href="order">
                  <img src="../img/laporan 2.png" alt="" class="icon" />
                  Buku Kas
                </a>
              </li>
              <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"><img src="../img/umum.png" alt="">
            Dropdown link
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
           
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="form">Form</a>
                  <a class="dropdown-item" href="https://wa.me/6285861880292">Whatsapp</a>
                  <a class="dropdown-item" href="https://www.instagram.com/diirapril28_/?next=%2F">Instagram</a>
                </div>
              </li>
              <li class="nav-item">
                <a  href="../logout.php"><img src="../img/logout.png" alt=""> logout </a>
              </li>
            </ul>

            
          </div>
        </nav>

        
       <nav >
        <div class="navbar">
            <p>Buku Kas Kelas</p>
        </div>
       </nav>

       



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
