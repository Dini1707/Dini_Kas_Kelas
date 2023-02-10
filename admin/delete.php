<?php
include "../koneksi.php";
$Id = $_GET['Id'];
$delete = $conn->query( "DELETE FROM tb_class_cash WHERE  Id = '$Id' ");

if ($delete)
    header('location:index.php?page=Buku');
?>