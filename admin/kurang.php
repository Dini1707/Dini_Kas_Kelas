<?php
include "../header.php";
include "../koneksi.php";
?>
<link rel="stylesheet" href="../style.css" type="text/css">

<div class="row pt-5">
    <div class="col-6">
        <a href="index.php?page=kurang" class="ms-5 ps-5"><button class="btn btn-outline-secondary" type="submit">Tambah</button></a>
    </div>

    <div class="col-4">
        <form class="d-flex" method="GET" action="">
      <div class="input-group"><input  type="date" name="page" value="Pengeluaran" hidden>
      <input class="form-control " type="date" name="search" placeholder="Search" >
     <button class="btn btn-outline-secondary" type="submit" value="search" ><i class='bx bx-search'></i></button></div>
    </form>
</div>
</div>
        <!-- <div class="">
            <div class="pt-5">
            <a href="index.php?page=kurang" class="ms-5 ps-5"><button class="btn btn-outline-secondary" type="submit">Tambah</button></a><br>     -->
            <table border=1; class="table table-info table-striped offset-1" ><br>
            <tr>
                <td>ID</td>
                <td>DATE</td>
                <td>OUTPUT</td>
                <td>INFORMATION</td>
                <td>ACTION</td>
            </tr>

            <?php 
            $sql = "SELECT * FROM tb_output  ORDER BY Id DESC";
            $result = $conn->query($sql);
            $data = 1;
            while ($row=$result->fetch_assoc()) {
             ?>
                <tr>
                    <td><?php echo $data++?></td>
                    <td><?php echo $row["Date"]?></td>
                    <td><?php echo $row["Saldo"]?></td>
                    <td><?php echo $row["Information"]?></td>
                    <td><a href="index.php?page=edit_out&Id=<?php echo $row['Id']?>" ><img src="../img/edit.png"  alt=""></a>
                    <a href="delete_out.php?Id=<?php echo $row['Id']?>"><img src="../img/delete.png" alt=""></a></td>
                </tr>
                    <?php
                        }
                ?>
            </table>
            </div>
        </div>

<!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script> -->

<?php
include "../footer.php";
?>