<?php 
ob_start();
include "../koneksi.php";
include "../header.php";

if (isset($_POST['add'])) {
   $Nisn = $_POST['Nisn'];
   $Nama = $_POST['Nama'];
   $Kelas = $_POST['Kelas'];
   $JK = $_POST['JK'];

   $add = "INSERT INTO tb_student_list (Nisn, Name, Class, Gender ) VALUES ('$Nisn','$Nama', '$Kelas', '$JK')";
   if ($conn->query ($add) === TRUE) {
    echo "<script>
    alert('Data Berhasil Ditambahkan');
    window.location= 'index.php?page=anggota';
    </script>";
//    header("location: index.php?page=Tampil_user");
   ob_end_flush();
   }
}
?>

<link rel="stylesheet" href="../style.css" type="text/css">



<h2 class="py-4">Tambah Anggota</h2>

<div  style="width:120%; background-color:#377BE1;" ><h3 class="p-3 text-white">Form Kas Masuk</h3></div>
<div class="col-8 offset-3 pt-5">
<form action=""  method="post"><br>
<div class="row ">
  <div class="col-6">
    <label for="exampleInputEmail1" class="form-label">Nisn</label>
    <input style="height:45px;" type="number" name="Nisn" class="form-control" placeholder="Nisn" id="exampleInputEmail1" aria-describedby="emailHelp" required>
  </div>


<div class="col-6">
  <label for="exampleInputEmail1" class="form-label">Nama</label>
  <input style="height:45px;" type="text" class="form-control" name="Nama" placeholder="Nama" id="exampleInputEmail1" aria-describedby="emailHelp" required>
</div>


<div class="col-6 ">
  <label for="exampleInputPassword1" class="form-label">Kelas</label>
  <input style="height:45px;" type="text" class="form-control" name="Kelas" placeholder="Kelas" id="exampleInputPassword1" required>
</div>

<div class="col-6 ">
  <label for="JK" class="form-label">Jenis Kelamin</label>
  <select id="JK" style="height:45px;" class= "rounded-3 form-select form-select-sm" name="JK" aria-label=".form-select-sm example" required>
  <option value="Laki-Laki">Laki-Laki</option>
  <option value="Perempuan">Perempuan</option>
  </select><br>
  <div class="float-end btn btn-primary mt-2">
  <img src="../img/kirim.png" width= 20px; alt="">
  <input type="submit" name="add" id="submit"  value="Simpan"  class=" btn btn-primary">
</div>
</div>



</div>
</div>
</form>
</div>


<?php 
include "../footer.php";
?>