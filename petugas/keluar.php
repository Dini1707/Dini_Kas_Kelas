<?php 
include "../koneksi.php";
include "../header.php";
if (isset ($_POST['add'])) {
    $Output = $_POST['Saldo'];
    $Information = $_POST['Information'];

    
    $add ="INSERT INTO tb_output (Saldo, Information ) VALUES ('$Output', '$Information')";

    if ($conn->query ($add) === TRUE) {
      echo "<script>
      document.location.href='index.php?page=Pengeluaran';
      </script>";
    }else {
        
        echo "maaf gagal merubah data";
   
  }
    }    
?>


<br>
<link rel="stylesheet" href="../style.css">
<h2 class="py-4">Tambah Kas Keluar</h2>

<div  style="width:105%; background-color:#377BE1;" ><h3 class="p-3 text-white">Form Kas Keluar</h3></div>
<div class="col-6 pt-5 offset-3 ">
<form action=""  method="post"><br>
        <div class="row ">
  <div class="col-6">
  <div class="">
    <div >
      <label for="Input">Kas Keluar</label>   
        <input required type="number" class="form-control from1 border border-2 border-dark rounded-4" name="Saldo" placeholder="Kas Keluar" aria-label="First name" id="Input">
    </div>
  </div>
  </div>

  <div class="col-6 ">
  <label for="Dsc">Keterangan</label>   
  <div class="form-floating ">
  <textarea required class="form-control form-control from1 border border-2 border-dark rounded-4" placeholder="Keterangan" id="floatingTextarea2" style="height: 135px" name="Information"></textarea>
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