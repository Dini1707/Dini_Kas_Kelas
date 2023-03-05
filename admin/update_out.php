<?php
ob_start();
    include "../koneksi.php";
    include "../header.php";
    $Id =$_GET ['Id'];
    $sql="SELECT * FROM tb_output  WHERE Id='$Id'";
    $edit = $conn->query($sql);
?>
<link rel="stylesheet" href="../style.css">
<form action="" method="post">
<?php

while ($row=$edit->fetch_assoc ()) {


?>
<h2 class="py-4">Edit Data</h2>

<div  style="width:120%; background-color:#377BE1;" ><h3 class="p-3 text-white">Form Edit Data</h3></div>
<div class="col-6 pt-5 offset-3 ">
<form action=""  method="post"><br>
        <div class="row ">
  <div class="col-6 ">
  <label for="Input">Saldo Masuk</label>   
    <input type="number" class="form-control from1 border border-2 border-dark rounded-4" name="Saldo" placeholder="Input" aria-label="First name" id="Input"  value="<?php echo $row['Saldo'];?>">
  </div>
  <div class="col-6 ">
  <label for="Dsc">Keterangan</label>   
    <input type="text" class="form-control from1 border border-2 border-dark rounded-4"  name="Information" placeholder="Information" aria-label="Last name" id="Dsc"  value="<?php echo $row['Information'];?>">
  </div>
</div><br>


<div class="float-end btn btn-success">
    <img src="../img/kirim.png" width= 20px; alt="">
	<input type="submit" name="edit" id="submit"  value="Simpan"  class=" btn btn-success">
    
	</div>
</form>


<?php
}

if (isset($_POST ['edit'])){
    $Input = $_POST ['Saldo'];
    $Information = $_POST ['Information'];
    $update = $conn->query ( "UPDATE tb_output SET Saldo='$Input', Information='$Information' WHERE Id='$Id' ");

    if ($update){
      header ("location:index.php?page=Pengeluaran");
      ob_end_flush();
    }else {
        
        echo "maaf gagal merubah data";
    }
   
}
?>

</form>

<?php 
include "../footer.php"; 
?>