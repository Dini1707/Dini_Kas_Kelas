<?php
include "isi.php";
include "../koneksi.php";
?>
<link rel="stylesheet" href="../style.css" type="text/css">
        <div class="">
            <div class="">
            <table border=1; class="table table-info table-striped"><br><br>
            <tr>
                <td>ID</td>
                <td>DATE</td>
                <td>NAME</td>
                <td>INPUT</td>
                <td>OUTPUT</td>
                <td>TOTAL</td>
                <td>INFORMATION</td>
                <td>ACTION</td>
            </tr>

            <?php 
            $sql = "SELECT * FROM tb_class_cash";
            $result = $conn->query($sql);
            $data = 1;
            while ($row=$result->fetch_assoc()) {
             ?>
                <tr>
                    <td><?php echo $data++?></td>
                    <td><?php echo $row["Date"]?></td>
                    <td><?php echo $row["Name"]?></td>
                    <td><?php echo $row["Input"]?></td>
                    <td><?php echo $row["Output"]?></td>
                    <td><?php echo $row["Total"]?></td>
                    <td><?php echo $row["Information"]?></td>
                    <td><a href="" ><?php $row['Id'];?> <img src="../img/edit.png"  alt=""></a>
                    <a href="delete.php?Id=<?php echo $row['Id']?>"><img src="../img/delete.png" alt=""></a></td>
                </tr>
                    <?php
                        }
                ?>
            </table>
            </div>
        </div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
