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
    window.location= 'index.php?page=Tampil_user';
    </script>";
//    header("location: index.php?page=Tampil_user");
   ob_end_flush();
   }
}
?>
<link rel="stylesheet" href="../style.css" type="text/css">

<div class="row">
    <div class="col-lg-1"></div>
    <div class="col-lg-4">
    <form class="pt-5" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nisn</label>
    <input style="height:45px;" type="number" name="Nisn" class="form-control" placeholder="Nisn" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama</label>
    <input style="height:45px;" type="text" class="form-control" name="Nama" placeholder="Nama" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Kelas</label>
    <input style="height:45px;" type="text" class="form-control" name="Kelas" placeholder="Kelas" id="exampleInputPassword1">
  </div>
  <label for="JK" class="form-label">Jenis Kelamin</label>
  <select id="JK" style="height:45px;" class= "rounded-3 form-select form-select-sm" name="JK" aria-label=".form-select-sm example">
  <option value="Laki-Laki">Laki-Laki</option>
  <option value="Perempuan">Perempuan</option>
</select><br><br>
    <input type="submit" value="Tambah" name="add"class="btn btn-primary">
</form>

    </div>
</div>
<?php 
include "../footer.php";
?>