<?php
include "koneksi.php";
$no = $_GET['no'];
$delete = mysqli_query($koneksi, "DELETE FROM tb_kas_kelas WHERE  no = '$no' ");

if ($delete)
    header('location:index.php');
?>