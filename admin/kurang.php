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
      <div class="input-group"><input  type="date" name="page" value="Pengeluaran" hidden data-date-format="YYYY-mm-DD">
      <input class="form-control" type="date" name="search" 
data-date-format="YYYY-mm-DD" placeholder="yyyy-mm-dd" required autofocus>     <button class="btn btn-outline-secondary" type="submit" value="search" ><i class='bx bx-search'></i></button></div>
    </form>
</div>
</div>

            <table border="1" class="table table-info table-striped m-5" ><br>
            <tr>
                <td>ID</td>
                <td>DATE</td>
                <td>OUTPUT</td>
                <td>INFORMATION</td>
                <td>ACTION</td>
            </tr>

            <?php 
           if(isset($_GET['search'])){
            $Name = $_GET['search'];
            $query = "SELECT * FROM tb_output  WHERE Date LIKE '%$Name%'";
            $result= $conn->query($query);
        }else {
            $batas = 5;
            $halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;
            $halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;	

            $previous = $halaman - 1;
            $next = $halaman + 1;
            
            $data = mysqli_query($conn,"SELECT * FROM tb_output ");
            $jumlah_data = mysqli_num_rows($data);
            $total_halaman = ceil($jumlah_data / $batas);

            $data_pegawai = "SELECT * FROM tb_output limit $halaman_awal, $batas";
            $nomor = $halaman_awal+1;
            //$query = "SELECT * FROM tb_input  ORDER BY Id DESC";
            $result= $conn->query($data_pegawai);
        }
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
<script
src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.3/moment.min.js">
</script>

<script>
    
    $(".form-control").on("change", function() {
    this.setAttribute(
        "data-date",
        moment(this.value, "DD-mm-YYYY")
        .format( this.getAttribute("data-date-format") )
    )
    }).trigger("change")

</script>