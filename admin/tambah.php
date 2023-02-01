<?php 
include "../koneksi.php";
if (isset ($_POST['add'])) {
    $tanggal = $_POST['tanggal'];
    $pemasukan = $_POST['pemasukan'];
    $pengeluaran = $_POST['pengeluaran'];
    $jumlah = $_POST['jumlah'];
    $keterangan = $_POST['keterangan'];
    
    $add = mysqli_query($koneksi, "INSERT INTO  tb_kas_kelas VALUE(' ','$tanggal', '$pemasukan' , '$pengeluaran','$pemasukan - $pengeluaran', '$keterangan')");

    if ($add){
        header('location: index.php');
    }
}
?>

<form action=""  method="post">
        <input type="text" name="keterangan" placholder="no"><br>
        <input type="text" name="keterangan" placholder="tanggal"><br>
        <input type="text" name="keterangan" placholder="pemasukan"><br>
        <input type="text" name="keterangan" placholder="pengeluaran"><br>
        <input type="text" name="keterangan" placholder="jumlah"><br>
        <input type="text" name="keterangan" placholder="keterangan"><br>
        <input type="submit" name="add" value="tambahan">
</form>