<?php 
// menghapus semua session

session_destroy();
 
// mengalihkan halaman sambil mengirim pesan logout
header("location:../Dini_kas_Kelas/index.php");
?>