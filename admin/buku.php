<?php
include "../header.php";
include "../koneksi.php";
?>

 <?php
        $result = mysqli_query($conn, 'SELECT SUM(Saldo) AS Saldo FROM tb_input'); 
        $row = mysqli_fetch_assoc($result); 
        $sum1 = $row['Saldo'];
    ?>

<?php
        $result = mysqli_query($conn, 'SELECT SUM(Saldo) AS Saldo FROM tb_output'); 
        $row = mysqli_fetch_assoc($result); 
        $sum2 = $row['Saldo'];
    ?>

<link rel="stylesheet" href="../style.css" type="text/css">
<div class="container">
<div class="row">

    <div class="col-1 pt-5 ms-4 mt-5 ">
        <button class="btn btn-info" style="margin-left:8%; margin-bottom:2%;" onclick="printDiv('print')" type="submit" data-toggle="print" data-placement="right" title="print"><i class='bx bx-printer'></i>Print</button>
    </div>
    
    <div class="col-3 pe-5 pt-5 mt-5">
        <form action="" method="get" class="">
            <div class="input-group mb-3">
                <input type="text" name="page" value="data" hidden>
                <input style="height:40px;" type="number" min="1" max="12" class="form-control" placeholder="Bulan"  name="bulan">
                <input style="height:40px;" type="number" min="2022" max="" class="form-control" placeholder="Tahun" name="tahun">
                <button style="height:40px; " class="btn btn-outline-secondary" type="submit" name="search" >Search</button>
            </div>
        </form>
        </div>
</div>
<div class="row mt-4" id="print">
            <div class="col-lg-6 ">
           
           
            <table border=1; class="table table-info table-striped " >
            <tr>
                <td>ID</td>
                <td>DATE</td>
                <td>INPUT</td>
                <td>INFORMATION</td>
            </tr>

            <?php 
            if (isset($_GET["search"])) {
                $bulan= $_GET["bulan"];
                $tahun= $_GET["tahun"];
                $query= "SELECT * FROM tb_input WHERE MONTH(Date)='$bulan' AND YEAR(Date)='$tahun'" ;
                $result= $conn->query($query);
            }else{
                $query = "SELECT * FROM tb_input";
                $result= $conn->query($query);
            }
            $data = 1;
            while ($row=$result->fetch_assoc()) {
             ?>
                <tr>
                    <td><?php echo $data++?></td>
                    <td><?php echo $row["Date"]?></td>
                    <td>Rp. <?php echo $row["Saldo"]?></td>
                    <td><?php echo $row["Information"]?></td>
                </tr>
                    <?php
                        }
                ?>
                <tr>
                    <th>Total:</th>
                    <th></th>
                    <th>Rp. <?php echo $sum1;?></th>
                    <th></th>
                </tr>
            </table>
            </div>


            <div class="col-lg-6 mt-1" >
        
            <table border=1; class="table table-info table-striped" >
            <tr>
                <td>ID</td>
                <td>DATE</td>
                <td>OUTPUT</td>
                <td>INFORMATION</td>                                                                      
            </tr>

            <?php 
           if (isset($_GET["search"])) {
            $bulan= $_GET["bulan"];
            $tahun= $_GET["tahun"];
            $query= "SELECT * FROM tb_output WHERE MONTH(Date)='$bulan' AND YEAR(Date)='$tahun'" ;
            $result= $conn->query($query);
        }else{
            $query = "SELECT * FROM tb_output";
            $result= $conn->query($query);
        }
            $data = 1;
            while ($row=$result->fetch_assoc()) {
             ?>
                <tr>
                    <td><?php echo $data++?></td>
                    <td><?php echo $row["Date"]?></td>
                    <td>Rp. <?php echo $row["Saldo"]?></td>
                    <td><?php echo $row["Information"]?></td>
                </tr>
                    <?php
                        }
                ?>
                <tr>
                    <th>Total :</th>
                    <th></th>
                    <th>Rp. <?php echo $sum2;?></th>
                    <th></th>
                </tr>
            </table>
          
            </div>
        </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

<?php 
include "../footer.php";
?>

<script type="text/javascript">
  function printDiv (el) {
    var a= document.body.innerHTML;
    var b= document.getElementById(el).innerHTML;

    document.body.innerHTML=b;
    window.print();
    dokument.body.innerHTML=a;
  }
</script>