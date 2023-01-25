<?php 
include "../boot.php";
include "../koneksi.php";


?>

<table border=1 class="table">
        <tr>
            <td>no</td>
            <td>tanggal</td>
            <td>pemasukan</td>
            <td>pengeluaran</td>
            <td>jumlah</td>
            <td>keterangan</td>
        </tr>

        <?php 
        $query = "SELECT * FROM tb_kas_kelas";
        $select = mysqli_query($koneksi, $query);
        while ($data =mysqli_fetch_array($select)){
      ?>
      
            <tr>
                <td><?php echo $data["no"]?></td>
                <td><?php echo $data["tanggal"]?></td>
                <td><?php echo $data["pemasukan"]?></td>
                <td><?php echo $data["pengeluaran"]?></td>
                <td><?php echo $data["jumlah"]?></td>
                <td><?php echo $data["keterangan"]?></td>
            </tr>
      <?php
        }
?>
</table>

