<?php
include "isi.php";
    include "../koneksi.php";
    include "../header.php";
    $Id =$_GET ['Id'];
    $sql="SELECT * FROM tb_student_list  WHERE Id='$Id'";
    $edit = $conn->query($sql);
?>
<link rel="stylesheet" href="../style.css">
<form action="" method="post">
<?php

while ($row=$edit->fetch_assoc ()) {


?><br>
<h2 class="py-4">Edit Data</h2>

<div  style="width:120%; background-color:#377BE1;" ><h3 class="p-3 text-white">Form Edit Data</h3></div>
<div class="col-6 pt-5 offset-3 ">
<form action=""  method="post"><br>
        <div class="row ">
  <div class="col-6 ">
  <label for="Id">Nisn</label><br>
    <input type="text" class="form-control from1 border border-2 border-dark rounded-4"  name="Nisn" placeholder="Id" aria-label="First name" id="Id" value="<?php echo $row['Nisn'];?>">
  </div>
  
  <div class="col-6 ">
  <label for="Name">Name</label><br>
    <input type="text" class="form-control from1 border border-2 border-dark rounded-4"  name="Name" placeholder="Id" aria-label="First name" id="Name" value="<?php echo $row['Name'];?>">
  </div>
  
  <div class="col-6 ">
  <label for="Id">Class</label><br>
    <input type="text" class="form-control from1 border border-2 border-dark rounded-4"  name="Class" placeholder="Id" aria-label="First name" id="Class" value="<?php echo $row['Class'];?>">
  </div>
  
  <div class="col-6 ">
  <label for="Id">Jenis Kelamin</label><br>
    <select id="JK" style="height:45px;" class= "rounded-3 form-select form-select-sm" name="Gender" aria-label=".form-select-sm example" required value="<?php echo $row['Gender'];?>">
  <option value="Laki-Laki">Laki-Laki</option>
  <option value="Perempuan">Perempuan</option>
  </select>
  </div>
  
</div><br>


<div class="float-end btn btn-primary">
    <img src="../img/kirim.png" width= 20px; alt="">
	<input type="submit" name="edit" id="submit"  value="Simpan"  class=" btn btn-primary">
    
	</div>
</form>


<?php
}

if (isset($_POST ['edit'])){
    $Nisn = $_POST ['Nisn'];
    $Name = $_POST ['Name'];
     $Class = $_POST ['Class'];
    $Gender = $_POST ['Gender'];
    $update = $conn->query ( "UPDATE tb_student_list SET Nisn='$Nisn', Name='$Name', Class='$Class', Gender='$Gender' WHERE Id='$Id' ");

    if ($update){
      echo "<script>
      document.location.href='index.php?page=Tampil_user';
      </script>";
    }else {
        
        echo "maaf gagal merubah data";
    }
   
}
?>

</form>

<?php 
include "../footer.php"; 
?>