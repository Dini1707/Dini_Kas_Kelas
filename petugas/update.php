<?php
    include "../koneksi.php";
    $no = $_GET ['no'];
    $edit = mysqli_query($koneksi, "SELECT * FROM tb_kas_kelas  WHERE id='$no'");
?>

<form action="" method="post">
<?php

while ($data =mysqli_fetch_array ($edit)) {


?>
<input type="text" name="no" value="<?php echo $data ['no']?>"><br>
<input type="text" name="tanggal" value="<?php echo $data ['tanggal']?>"><br>
<input type="text" name="pemasukan" value="<?php echo $data ['pemasukan']?>"><br>
<input type="text" name="pengeluaran" value="<?php echo $data ['pengeluaran']?>"><br>
<input type="text" name="jumlah" value="<?php echo $data ['jumlah']?>"><br>
<input type="text" name="keterangan" value="<?php echo $data ['keterangan']?>"><br>
<input type="submit" name="edit" value="edit">


<?php
}

if (isset($_POST ['edit'])){
    $no =$_POST  ['no'];
    $tanggal = $_POST ['tanggal'];
    $pemasukan = $_POST ['pemasukan'];
    $pengeluaran = $_POST ['pengeluaran'];
    $jumlah = $_POST ['jumlah'];
    $keterangan = $_POST ['keterangan'];
    $update = mysqli_query ($koneksi, "UPDATE tb_kas_kelas SET no='$no', tanggal='$tanggal', pemasukan='$pemasukan', pengeluaran='$pengeluaran', jumlah='$jumlah', keterangan='$keterangan' WHERE no='$no' ");

    if ($update){
        header('location:index.php');
    }
   
}
?>

</form>