<?php
include "isi.php";
    include "../koneksi.php";
    include "../header.php";
    $Id =$_GET ['Id'];
    $sql="SELECT * FROM tb_input  WHERE Id='$Id'";
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
  <div class="col-6">
  <div class=" ">
  <label for="Id">Nama</label><br>
    <input type="text" class="form-control from1 border border-2 border-dark rounded-4"  name="Name" placeholder="Id" aria-label="First name" id="Id" value="<?php echo $row['Name'];?>">
  </div>
  <div class="">
  <label for="Dsc">Kas Masuk</label>   
    <input type="number" class="form-control from1 border border-2 border-dark rounded-4"  name="Saldo" placeholder="Information" aria-label="Last name" id="Dsc"  value="<?php echo $row['Saldo'];?>">
  </div>
  </div>
  <div class="col-6 ">
  <label for="Dsc">Keterangan</label>   
  <div class="form-floating ">
  <textarea required class="form-control form-control from1 border border-2 border-dark rounded-4"  id="floatingTextarea2" style="height: 135px" name="Information"><?php echo $row ['Information']; ?></textarea>
</div>
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
    $Name = $_POST ['Name'];
    $Saldo = $_POST ['Saldo'];
    $Information = $_POST ['Information'];
    $update = $conn->query ( "UPDATE tb_input SET Name='$Name', Saldo='$Saldo', Information='$Information' WHERE Id='$Id' ");

    if ($update){
      echo "<script>
      document.location.href='index.php?page=masuk';
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