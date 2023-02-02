<?php
include "isi.php";
include "../koneksi.php";
?>
<main>
<link rel="stylesheet" href="../style.css" type="text/css">

<nav >
        <div class="navbar">
           <h3>Buku Kas Kelas</h3>
        </div>
       </nav>

       <table border=1 class="table table-success table-striped">
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
        $data = 1;
        if ($row=$result->fetch_assoc()) {
        
      ?>
      
            <tr>
                <td><?php echo $data++?></td>
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
    </main>