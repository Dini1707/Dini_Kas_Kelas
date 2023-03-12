<?php
ob_start();
include "../koneksi.php";
$Id = $_GET['Id'];
$delete = $conn->query( "DELETE FROM tb_input WHERE  Id = '$Id' ");

if ($delete)
    header('location:index.php?page=masuk');
    ob_end_flush();
?>