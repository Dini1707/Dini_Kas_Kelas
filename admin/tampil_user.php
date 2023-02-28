<?php
include "../header.php";
include "../koneksi.php";
?>

<link rel="stylesheet" href="../style.css" type="text/css">
        <div class="row">
            <div class="pt-5 col-10">
                
            <div class="row">
            <div class="col-6">
                <a href="index.php?page=anggota" class="ms-5 ps-5"><button class="btn btn-outline-secondary" type="submit">Tambah</button></a>
        </div>

            <div class="col-6">
                <form class="d-flex" method="GET" action="">
      <div class="input-group"><input  type="text" name="page" value="Tampil_user" hidden>
      <input class="form-control " type="text" name="search" placeholder="Search" >
     <button class="btn btn-outline-secondary" type="submit" value="search" ><i class='bx bx-search'></i></button></div>
    </form>
</div>
            </div>
            <br>
            
            
            <table border=1; class="table table-info table-striped offset-1" ><br>
            <tr>
                <td>NO</td>
                <td>NISN</td>
                <td>NAME</td>
                <td>KELAS</td>
                <td>JENIS KELAMIN</td>
            </tr>

            <?php 
             if(isset($_GET['search'])){
                $Name = $_GET['search'];
        
                $query = "SELECT * FROM tb_student_list WHERE Name LIKE '%$Name%'";
                $result= $conn->query($query);
            }else {
                $query = "SELECT * FROM tb_student_list ORDER BY Id DESC";
                $result= $conn->query($query);
            }
           
            $data = 1;
            while ($row=$result->fetch_assoc()) {
             ?>
                <tr>
                    <td><?php echo $data++?></td>
                    <td><?php echo $row["Nisn"]?></td>
                    <td><?php echo $row["Name"]?></td>
                    <td><?php echo $row["Class"]?></td>
                    <td><?php echo $row["Gender"]?></td>
                </tr>
                    <?php
                        }
                ?>
            </table>
            </div>
        </div>



<?php
include "../footer.php";
?>