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
            <td>NO</td>
            <td>TANGGAL</td>
            <td>PEMASUKAN</td>
            <td>PENGELUARAN</td>
            <td>JUMLAH</td>
            <td>KETERANGAN</td>
            <td>ACTION</td>
        </tr>

        <?php 
        $sql = "SELECT * FROM tb_kas_kelas";
        $result = $conn->query($sql);
        if ($row=$result->fetch_assoc()) {
        
      ?>
      
            <tr>
                <td><?php echo $row["NO"]?></td>
                <td><?php echo $row["TANGGAL"]?></td>
                <td><?php echo $row["PEMASUKAN"]?></td>
                <td><?php echo $row["PENGELUARAN"]?></td>
                <td><?php echo $row["JUMLAH"]?></td>
                <td><?php echo $row["KETERANGAN"]?></td>
            </tr>
      <?php
        }
?>
</table>

              <a href="../logout.php">logout</a>
