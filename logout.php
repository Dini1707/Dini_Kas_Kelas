<?php 
// menghapus semua session
session_destroy();
 
// mengalihkan halaman sambil mengirim pesan logout
header("location:UJIKOM/index.php?pesan=logout");
?>