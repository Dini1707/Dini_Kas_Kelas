<?php
include "isi.php";
include "../koneksi.php";
?>
<main class="container">
<link rel="stylesheet" href="../style.css" type="text/css">
        <div class="row">
            <div class="col">
            <table border=1; class="table table-info table-striped">
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
            while ($row=$result->fetch_assoc()) {
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
            </div>
        </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
