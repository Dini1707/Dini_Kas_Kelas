<?php
include "isi.php";
include "../header.php";

session_start();

if ($_SESSION ['level'] ="") {
  header("location: . ./index.php");
  # code...
}

if ($_SESSION ['level'] =="admin") {
  header("location: ../admin/index.php");
  # code...
}

?>

<link rel="stylesheet" href="../style.css" type="text/css">

<section id="sidebar">
    <div class="d-flex flex-column flex-shrink-0 p-3 " style="width: 280px;">
        <a class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
            <img src="../img/profile.png" width="50%" alt=""><use xlink:href=""></use></svg>
            <span class="fs-4"></span>
        </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto ">
        <li class="nav-item">
            <a href="index.php?page=home" class="nav-link link-dark" aria-current="page">
                <img src="../img/home 2.png" alt="" class="icon">
                Home
            </a>
        </li>
        <li>
            <a href="index.php?page=Tampil_user" class="nav-link link-dark">
                <img src="../img/add.png" alt="" class="icon"><use xlink:href="#speedometer2"></use></svg>
                Anggota
            </a>
        </li>
      <li>
        <a href="index.php?page=data" class="nav-link link-dark">
        <img src="../img/laporan 2.png" alt="" class="icon"><use xlink:href="#speedometer2"></use></svg>
         Buku Kas
        </a>
      </li>
     
      
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color:black;"><img src="../img/umum.png" alt="" class="icon" >
            Pengelolaan Kas
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="index.php?page=masuk" style="color:black;"><img src="../img/pemasukan.png" width="25px"  alt=""> Pemasukan</a></li>
            <li><a class="dropdown-item" href="index.php?page=Pengeluaran" style="color:black;"><img src="../img/pengeluaran.png" width="25px" alt="">  Pengeluaran</a></li>
          </ul>
        </li><br><br><br><br><br>

    <hr>
   
    <li>
        <a href="../logout.php" class="nav-link link-dark">
        <img src="../img/logout.png" alt="" class="icon"><use xlink:href="#grid"></use></svg>
          Logout
        </a>
      </li>
      </ul>
  </div>
</section>
<section id="content">
    <nav  class="shadow" style="height: 80px;">
        <h3 class="mx-3 py-4" >Buku Kas Kelas</h3>
        <div class="navbar h3"> 
        </div>
    </nav>

 
</section>
<main class="col-md-9 offset-2 pt-5">
    <?php
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
        switch ($page) {
            case 'home':
                include "home.php";
                break;
            case 'Pemasukan':
                include "tambah.php";
                break;
            case 'home':
                include "home.php";
                break;
            case "masuk":
                include "tampil_in.php";
                break;
            case "Pengeluaran":
                include "tampil_out.php";
                break;
            case "edit_in":
                include "update_in.php";
                break;
            case "edit_out":
                include "update_out.php";
                break;
            case "data":
                include "buku.php";
                break;
            case "kurang":
                include "keluar.php";
                break;
            case "anggota":
                include "add_user.php";
                break;
            case "Tampil_user":
                include "tampil_user.php";
                break;
                 case "edit_user":
                include "update_user.php";
                break;
                 case "delete_user":
                include "delete_user.php";
                break;
            default:
                echo "halam ini gak ada";
            break;
        }
    } else {
        include 'home.php';
    }
    ?>
    </main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>


<?php
include "../footer.php";
?>
