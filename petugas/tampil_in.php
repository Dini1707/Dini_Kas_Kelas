<?php
include "../header.php";
include "../koneksi.php";
?>

<?php
                $result = mysqli_query($conn, 'SELECT SUM(Saldo) AS Saldo FROM tb_input'); 
                $row = mysqli_fetch_assoc($result); 
                $sum = $row['Saldo'];
        
        ?>

<head>



<!-- Custom fonts for this template -->
<link href="../patch/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

<!-- Custom styles for this template -->

<!-- Custom styles for this page -->
<link href="../patch/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

            <!-- End of Topbar -->

            <!-- Begin Page Content -->
<div class="container-fluid ms-5">
    <div class="row">
       <div class="col-lg-10">
       <div class="card-body pt-4"><br><br>
            <a href="index.php?page=Pemasukan" class=""><button class="btn btn-primary">Tambah</button></a> <br><br>
        <div class="table-responsive">
            <table class="table table-bordered table-info table-striped" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <td>NO</td>
                        <td>NAMA</td>
                        <td>TANGGAL</td>
                        <td>SALDO</td>
                        <td>KETERANGAN</td>
                    </tr>
                </thead>

                <tbody>
                <?php
                $query = "SELECT * FROM tb_input ORDER BY id DESC";
                $result= $conn->query($query);
                $data = 1;
                while ($row=$result->fetch_array()){

                ?>
                    <tr>
                        <td><?php echo $data++;?></td>
                        <td><?php echo $row['Name']?></td>
                        <td><?php echo $row['Date']?></td>
                        <td>Rp. <?php echo $row['Saldo']?></td>
                        <td><?php echo $row['Information']?></td>
                    </tr>
                <?php
                }
                ?>

                </tbody>
            </table>


            </div>
        </div>  
       </div>
        <div class="col-lg-2 mt-5 pt-5">
            <div class=" pt-5">
                <div class="card mt-5">
                    <div class="card-body " style="background-color:#ACC8DC; font-family:Cooper;">
                        <h5 class="card-title text-center">Total Pemasukan</h5>
                        <p class="text-center card-text fs-3" style="font-family:Rockwell;">Rp. <?php echo $sum;?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="../patch/vendor/jquery/jquery.min.js"></script>
<script src="../patch/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="../patch/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="../patch/js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="../patch/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="../patch/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="../patch/js/demo/datatables-demo.js"></script>
<?php
include "../footer.php";
?>

<!-- Modal -->


<!-- <script>
    const myModal = document.getElementById('myModal')
const myInput = document.getElementById('myInput')

myModal.addEventListener('shown.bs.modal', () => {
  myInput.focus()
})
</script> -->