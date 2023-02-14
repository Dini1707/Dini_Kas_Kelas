<?php
    include "../koneksi.php";
    include "../header.php";
    $Id =$_GET ['Id'];
    $sql="SELECT * FROM tb_class_cash  WHERE Id='$Id'";
    $Id = $_GET ['Id'];
    $edit = $conn->query($sql);
?>

<form action="" method="post">
<?php

while ($row=$edit->fetch_assoc ()) {


?>
<!-- <input type="text" name="Id" value="<?php echo $row ['Id']?>"><br>
<input type="text" name="Date" value="<?php echo $row  ['Date']?>"><br>
<input type="text" name="Name" value="<?php echo $row  ['Name']?>"><br>
<input type="text" name="Input" value="<?php echo $row  ['Input']?>"><br>
<input type="text" name="Output" value="<?php echo $row  ['Output']?>"><br>
<input type="text" name="Total" value="<?php echo $row  ['Total']?>"><br>
<input type="text" name="Information" value="<?php echo $row  ['Information']?>"><br>
<input type="submit" name="edit" value="edit"> -->

<h2 class="py-4">Edit Data</h2>

<div  style="width:120%; background-color:#377BE1;" ><h3 class="p-3 text-white">Form Edit Data</h3></div>
<div class="col-6 pt-5 offset-3 ">
<form action=""  method="post"><br>
        <div class="row ">
  <div class="col-6 ">
  <label for="Id">Id</label><br>
    <input type="text" class="form-control from1 border border-2 border-dark rounded-4"  name="Id" placeholder="Id" aria-label="First name" id="Id" value="<?php echo $row['Id'];?>">
  </div>
  <div class="col-6 ">
  <label for="Date">Date</label>
    <input type="Date" class="form-control from1 border border-2 border-dark rounded-4"  name="Date" placeholder="Date" aria-label="First name" id="Date"  value="<?php echo $row['Id'];?>">
  </div>
  <div class="col-6 ">
  <label for="Nama">Nama</label>
    <input type="text" class="form-control from1 border border-2 border-dark rounded-4" name="Name" placeholder="Name" aria-label="Last name" id="Nama"  value="<?php echo $row['Name'];?>">
  </div>

 
  <div class="col-6 ">
  <label for="Input">Saldo Masuk</label>   
    <input type="text" class="form-control from1 border border-2 border-dark rounded-4" name="Input" placeholder="Input" aria-label="First name" id="Input"  value="<?php echo $row['Input'];?>">
  </div>
  <div class="col-6 ">
  <label for="Output">Saldo Keluar</label>   
    <input type="text" class="form-control from1 border border-2 border-dark rounded-4" name="Output" placeholder="Output" aria-label="First name" id="output"  value="<?php echo $row['Output'];?>">
  </div>
  <div class="col-6 ">
  <label for="Total">Total</label>   
    <input type="text" class="form-control from1 border border-2 border-dark rounded-4" name="Total" placeholder="Total" aria-label="First name" id="Total"  value="<?php echo $row['Total'];?>">
  </div>
  <div class="col-6 ">
  <label for="Dsc">Keterangan</label>   
    <input type="text" class="form-control from1 border border-2 border-dark rounded-4"  name="Information" placeholder="Information" aria-label="Last name" id="Dsc"  value="<?php echo $row['Information'];?>">
  </div>
</div>

<div class="float-end btn btn-success">
    <img src="../img/kirim.png" width= 20px; alt="">
	<input type="submit" name="edit" id="submit"  value="Simpan"  class=" btn btn-success">
    
	</div>
</form>


<?php
}

if (isset($_POST ['edit'])){
    $Id =$_POST  ['Id'];
    $Date = $_POST ['Date'];
    $Name = $_POST ['Name'];
    $Input = $_POST ['Input'];
    $Output = $_POST ['Output'];
    $Total = $_POST ['Total'];
    $Information = $_POST ['Information'];
    $update = $conn->query ( "UPDATE tb_class_cash SET Id='$Id', Date ='$Date', Name='$Name', Input='$Input', Output='$Output', Total='$Total', Information='$Information' WHERE Id='$Id' ");

    if ($update){
        header('location:index.php?page=Buku');
    }else {
        
        echo "maaf gagal merubah data";
    }
   
}
?>

</form>

<?php 
include "../footer.php"; 
?>