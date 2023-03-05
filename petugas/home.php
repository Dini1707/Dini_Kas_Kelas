<?php 
include "../koneksi.php";
include "../header.php";

?>

<link rel="stylesheet" href="../style.css" type="text/css">

<div style="margin-left:10%; margin-top:50px;" class="row p-5"> 

<div class="col-lg-3 col-md-6">
<a href="index.php?page=Tampil_user" style="color:black;">
<div class="kotak4 card">

<?php
$result3 = mysqli_query($conn, 'SELECT COUNT(*) AS Saldo FROM tb_student_list'); 
$row = mysqli_fetch_assoc($result3); 
$sum3 = $row['Saldo'];

?>


<p class="pt-4 mt-3 ps-5 fw-bold "><?php echo $sum3;?><br/></p>
    <p class="p1">ANGGOTA</p>
    <img class="g1" src="../img/anggota.png" alt="">
</div>
</a>
</div>

<br>
<div class="col-lg-3 col-md-6">
<div class="kotak1  card" >
<?php
$result1 = mysqli_query($conn, 'SELECT SUM(Saldo) AS Saldo FROM tb_input'); 
$row = mysqli_fetch_assoc($result1); 
$sum1 = $row['Saldo'];

?>
    <p class="pt-4 mt-3 ps-5 fw-bold "><?php echo $sum1;?><br/></p>
    <p class="p1">UANG MASUK</p>
    <img class="g1" src="../img/masuk.png" alt="">
</div>

</div>
<br>
<div class="col-lg-3 col-md-6">
<div class="kotak2 card">
<?php
$result2 = mysqli_query($conn, 'SELECT SUM(Saldo) AS Saldo FROM tb_output'); 
$row = mysqli_fetch_assoc($result2); 
$sum2 = $row['Saldo'];

?>
    <p class="pt-4 mt-3 ps-5 fw-bold "><?php echo $sum2;?><br/></p>
    <p class="p1">UANG KELUAR</p>
    <img class="g1" src="../img/keluar.png" alt="">
</div>
</div>
<br>
<div class="col-lg-3 col-md-4">
<div class="kotak3 card">
<p class="pt-4 mt-3 ps-5 fw-bold "><?php echo $sum1 - $sum2;?><br/></p>
    <p class="p1" style="left:20%;">TOTAL </p>
    <img class="g1" src="../img/total.png" alt="">
</div>
</div>
       </div>

<main>


<?php 
include "../footer.php";
?>