<?php 
include "isi.php";
include "../koneksi.php";
include "../header.php";

if (isset ($_POST['add'])) {
    $Name = $_POST['Name'];
    $Input = $_POST['Saldo'];
    $Information = $_POST['Information'];
    $add ="INSERT INTO tb_input (Name,Saldo,Information ) VALUES ( '$Name', '$Input', '$Information')";

    if ($conn->query ($add) === TRUE) {
      echo "<script>
      document.location.href='index.php?page=masuk';
      </script>";
      }
        
    }

?>
<link rel="stylesheet" href="../style.css" type="text/css">


<br>
<h2 class="py-4">Tambah Kas Masuk</h2>

<div  style="width:105%; background-color:#377BE1;" ><h3 class="p-3 text-white">Form Kas Masuk</h3></div>
<div class="col-8 offset-3 pt-5">
<form action=""  method="post"><br>
        <div class="row ">
  <div class="col-5">
  <div class="">
  <label for="Nama">Nama</label>
    <input required type="text" class="form-control from1 border border-2 border-dark rounded-4" name="Name" placeholder="Name" aria-label="Last name" id="Nama">
  </div>

 
  <div class="">
    <div >
      <label for="Input">Kas Masuk</label>   
        <input required type="number" class="form-control from1 border border-2 border-dark rounded-4" name="Saldo" placeholder="Kas Masuk" aria-label="First name" id="Input">
    </div>
  </div>
  </div>

  <div class="col-5 ">
  <label for="Dsc">Keterangan</label>   
  <div class="form-floating ">
  <textarea required class="form-control form-control from1 border border-2 border-dark rounded-4" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 135px" name="Information"></textarea>
</div>
<div class="float-end btn btn-primary mt-2">
    <img src="../img/kirim.png" width= 20px; alt="">
	<input type="submit" name="add" id="submit"  value="Simpan"  class=" btn btn-primary">
    
	</div>
  </div>
</div>


</form>
</div>

<?php
include "../footer.php";
?>