<?php 
include "../koneksi.php";
include "../header.php";
if (isset ($_POST['add'])) {
    $Date = $_POST['Date'];
    $Input = $_POST['Output'];
    $Information = $_POST['Information'];

    
    $add ="INSERT INTO tb_class_cash (Date, Name ,Input, Information ) VALUES ('$Date', '$Output', '$Information')";

    if ($conn->query ($add) === TRUE) {
       
    }
        
    }

    
?>

<h2 class="py-4">Tambah Kas Keluar</h2>

<div  style="width:120%; background-color:#377BE1;" ><h3 class="p-3 text-white">Form Kas Keluar</h3></div>
<div class="col-6 pt-5 offset-3 ">
<form action=""  method="post"><br>
        <div class="row ">
  <div class="col-6 ">
  <label for="Date">Date</label>
    <input type="Date" class="form-control from1 border border-2 border-dark rounded-4"  name="Date" placeholder="Date" aria-label="First name" id="Date" >
  </div>
  <div class="col-6">
  <label for="Nama">Nama</label>
    <input type="text" class="form-control from1 border border-2 border-dark rounded-4" name="Name" placeholder="Name" aria-label="Last name" id="Nama">
  </div>

 
  <div class="col-6 my-5">
  <label for="Input">Saldo Masuk</label>   
    <input type="text" class="form-control from1 border border-2 border-dark rounded-4" name="Input" placeholder="Input" aria-label="First name" id="Input">
  </div>
  <div class="col-6 my-5">
  <label for="Dsc">Keterangan</label>   
    <input type="text" class="form-control from1 border border-2 border-dark rounded-4"  name="Information" placeholder="Information" aria-label="Last name" id="Dsc">
  </div>
</div>

<div class="float-end btn btn-success">
    <img src="../img/kirim.png" width= 20px; alt="">
	<input type="submit" name="add" id="submit"  value="Simpan"  class=" btn btn-success">
    
	</div>
</form>
</div>