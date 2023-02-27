<?php
include "../header.php";
include "../koneksi.php";
?>
<link rel="stylesheet" href="../style.css" type="text/css">
<div class="row">
    <div class="col-lg-1"></div>
<div class="col-lg-9">
            <div class="pt-5">
            <a href="index.php?page=Pemasukan" class=""><button class="btn btn-outline-secondary" type="submit">Tambah</button></a><br>    

        <?php
                $result = mysqli_query($conn, 'SELECT SUM(Saldo) AS Saldo FROM tb_input'); 
                $row = mysqli_fetch_assoc($result); 
                $sum = $row['Saldo'];
        
        ?> <br>
            <table border=1; class="table table-info table-striped" >
            <tr>
                <td>ID</td>
                <td>DATE</td>
                <td>NAME</td>
                <td>INPUT</td>
                <td>INFORMATION</td>
                <td>ACTION</td>
            </tr>

            <?php 
            $sql = "SELECT * FROM tb_input  ORDER BY Id DESC";
            $result = $conn->query($sql);
            $data = 1;
            while ($row=$result->fetch_assoc()) {
             ?>
                <tr>
                    <td><?php echo $data++?></td>
                    <td><?php echo $row["Date"]?></td>
                    <td><?php echo $row["Name"]?></td>
                    <td><?php echo $row["Saldo"]?></td>
                    <td><?php echo $row["Information"]?></td>
                    <td><a href="index.php?page=edit_in&Id=<?php echo $row['Id']?>" ><img src="../img/edit.png"  alt=""></a>
                    <a href="delete_in.php?Id=<?php echo $row['Id']?>"><img src="../img/delete.png" alt=""></a></td>
                </tr>
                    <?php
                        }
                ?>
            </table>
            </div>
        </div>

        <div class="pt-5 col-lg-2 mt-5">
<div class="card mt-3">
      <div class="card-body" style=background-color:#ACC8DC;>
        <h5 class="card-title">Saldo Akhir</h5>
        <p class="card-text"><?php echo $sum;?></p>
      </div>
    </div>

</div>
<!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script> -->

<?php
include "../footer.php";
?>