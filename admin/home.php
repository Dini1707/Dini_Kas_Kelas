<?php 
include "../koneksi.php";
include "../header.php";

?>

<?php
        $result1 = mysqli_query($conn, 'SELECT SUM(saldo) AS saldo FROM tb_input'); 
        $row = mysqli_fetch_assoc($result1); 
        $sum1 = $row['saldo'];

        // beda tabel
        $result2 = mysqli_query($conn, 'SELECT SUM(saldo) AS saldo FROM tb_output'); 
        $row = mysqli_fetch_assoc($result2); 
        $sum2 = $row['saldo'];
        $sum3 = $sum1 - $sum2;
        $total = ((($sum3/$sum1)*100/100)*100)+((($sum2/$sum1)*100/100)*100);

// chart

$dataPoints = array( 
	array("label"=>"Pengeluaran", "y"=>(($sum2/$sum1)*100/100)*100),
	array("label"=>"total", "y"=>(($sum3/$sum1)*100/100)*100),
	
)
 
?>

<script>
window.onload = function() {
 
var chart = new CanvasJS.Chart("chartContainer", {
	theme: "light2",
	animationEnabled: true,
	title: {
	},
	data: [{
		type: "doughnut",
		indexLabel: "{symbol} - {y}",
		yValueFormatString: "#,##0.0\"%\"",
		showInLegend: true,
		legendText: "{label} : {y}",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>

<link rel="stylesheet" href="../style.css" type="text/css">

<div style="margin-left:10%; margin-top:50px;" class="row p-5"> 

<div class="col-lg-3 col-md-6">
<a style="color:black;">
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
    <p class="pt-4 mt-3 ps-4 fw-bold ">Rp. <?php echo $sum1;?><br/></p>
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
    <p class="pt-4 mt-3 ps-4 fw-bold ">Rp. <?php echo $sum2;?><br/></p>
    <p class="p1">UANG KELUAR</p>
    <img class="g1" src="../img/keluar.png" alt="">
</div>
</div>
<br>

<div class="col-lg-3 col-md-4">
<div class="kotak3 card">
<p class="pt-4 mt-3 ps-4 fw-bold ">Rp. <?php echo $sum1 - $sum2;?><br/></p>
    <p class="p1" style="left:20%;">TOTAL </p>
    <img class="g1" src="../img/total.png" alt="">
</div>
</div>
<div class="mt-3">
<div id="chartContainer" style="height: 370px; width: 100%; margin-top:25px;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
       </div>


</div>
<main>


<?php 
include "../footer.php";
?>