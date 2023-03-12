<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'koneksi.php';
 
// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];

 
// menyeleksi data admin dengan username dan password yang sesuai

$sql = "SELECT * FROM tb_user where username='$username' and password= md5('$password') ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	// output data of each row
	while ($row = $result-> fetch_assoc()){
		if ($row ['role' ] == "admin") {
			$_SESSION['username'] = $username;
			$_SESSION['level'] = "admin";
			echo "<script>
			document.location.href='admin/index.php'
			</script>";
		}elseif ($row ['role'] == "petugas") {
			$_SESSION['username'] = $username;
			$_SESSION['level'] = "petugas";
			echo "<script>
			document.location.href='petugas/index.php'
			</script>";
		
		}
			}
		
}else{
	header("location:index.php");
}
$conn->close();


?>