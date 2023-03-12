<?php
ob_start();
include "../koneksi.php";
$Id = $_GET['Id'];
$delete = $conn->query( "DELETE FROM tb_student_list WHERE  Id = '$Id' ");

if ($delete)
    header('location:index.php?page=Tampil_user');
    ob_end_flush();
?>