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
                <form class="" method="GET" action="">
      <div class="input-group position-static">
      <input  type="text" name="page" value="Tampil_user" hidden>
      <input class="form-control" type="text" name="search" placeholder="Search" >
     <button class="btn btn-outline-secondary" type="submit" value="search" ><i class='bx bx-search'></i></button>
      </div>
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
                    $query = "SELECT * FROM tb_student_list  WHERE Name LIKE '%$Name%'";
                    $result= $conn->query($query);
                }else {
                    $batas = 10;
                    $halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;
                    $halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;	
    
                    $previous = $halaman - 1;
                    $next = $halaman + 1;
                    
                    $data = mysqli_query($conn,"SELECT * FROM tb_student_list");
                    $jumlah_data = mysqli_num_rows($data);
                    $total_halaman = ceil($jumlah_data / $batas);
    
                    $data_pegawai = "SELECT * FROM tb_student_list limit $halaman_awal, $batas";
                    $nomor = $halaman_awal+1;
                    //$query = "SELECT * FROM tb_input  ORDER BY Id DESC";
                    $result= $conn->query($data_pegawai);
                }
            
                $no = 1;
                while ($row=$result->fetch_array()) {
                ?>
                    <tr>
                        <td><?php echo $no++?></td>
                        <td><?php echo $row["Nisn"]?></td>
                        <td><?php echo $row["Name"]?></td>
                        <td><?php echo $row["Class"]?></td>
                        <td><?php echo $row["Gender"]?></td>
                        
                    </tr>
                <?php
                }
                ?>

            <!-- <?php 
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
                ?> -->
            </table>
            <nav  style="background-color: none; margin-left:15
            %;">
                <ul class="pagination justify-content-center">
                    <li class="page-item">
                        <a class="page-link" <?php if($halaman > 1){ echo "href='?halaman=$previous&page=Tampil_user'"; } ?>>Previous</a>
                    </li>
                    <?php 
                    for($x=1;$x<=$total_halaman;$x++){
                        ?> 
                        <li class="page-item"><a class="page-link" href="?halaman=<?php echo $x ?>&page=Tampil_user"><?php echo $x; ?></a></li>
                        <?php
                    }
                    ?>				
                    <li class="page-item">
                        <a  class="page-link" <?php if($halaman < $total_halaman) { echo "href='?halaman=$next&page=Tampil_user'"; } ?>>Next</a>
                    </li>
                </ul>
            </nav>
            </div>
        </div>



<?php
include "../footer.php";
?>