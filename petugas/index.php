<?php 
include "../boot.php";
include "../koneksi.php";

session_start();

if ($_SESSION ['level'] = "") {
  header("location: ../index.php");
  # code...
}

if ($_SESSION ['level'] =="petugas") {
  header("location: ../petugas/index.php");
  # code...
}

echo $_SESSION['level'];
?>
<table border=1 class="table">
        <tr>
            <td>ID</td>
            <td>DATE</td>
            <td>INPUT</td>
            <td>OUTPUT</td>
            <td>TOTAL</td>
            <td>INFORMATION</td>
            <td>ACTION</td>
        </tr>

        <?php 
        $sql = "SELECT * FROM tb_kas_kelas";
        $result = $conn->query($sql);
        if ($row=$result->fetch_assoc()) {
        
      ?>
      
            <tr>
                <td><?php echo $row["ID"]?></td>
                <td><?php echo $row["DATE"]?></td>
                <td><?php echo $row["INPUT"]?></td>
                <td><?php echo $row["OUTPUT"]?></td>
                <td><?php echo $row["TOTAL"]?></td>
                <td><?php echo $row["INFORMATION"]?></td>
            </tr>
      <?php
        }
?>
</table>

              <a href="../logout.php">logout</a>
