<?php 
ob_start();
include "../koneksi.php";
include "../header.php";
if (isset ($_POST['add'])) {
    $Output = $_POST['Saldo'];
    $Information = $_POST['Information'];

    
    $add ="INSERT INTO tb_output (Saldo, Information ) VALUES ('$Output', '$Information')";

    if ($conn->query ($add) === TRUE) {
      header ("location:index.php?page=Pengeluaran");
      ob_end_flush();
    }else {
        
        echo "maaf gagal merubah data";
   
  }
    }
        
    

    
?>
<link rel="stylesheet" href="../style.css">
<h2 class="py-4">Tambah Kas Keluar</h2>

<div  style="width:120%; background-color:#377BE1;" ><h3 class="p-3 text-white">Form Kas Keluar</h3></div>
<div class="col-6 pt-5 offset-3 ">
<form action=""  method="post"><br>
        <div class="row ">
  <div class="col-6">
  

 
  <div class="">
    <div >
      <label for="Input">Saldo Keluar</label>   
        <input required type="number" class="form-control from1 border border-2 border-dark rounded-4" name="Saldo" placeholder="Input" aria-label="First name" id="Input">
    </div>
  </div>
  </div>

  <div class="col-6 ">
  <label for="Dsc">Keterangan</label>   
  <div class="form-floating ">
  <textarea required class="form-control form-control from1 border border-2 border-dark rounded-4" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 135px" name="Information"></textarea>
</div>
  </div>
</div>

<div class="float-end btn btn-primary mt-2">
    <img src="../img/kirim.png" width= 20px; alt="">
	<input type="submit" name="add" id="submit"  value="Simpan"  class=" btn btn-primary">
    
	</div>
</form>
</div>

<?php
include "../footer.php";
?>