<?php
include "isi.php";
include "../koneksi.php";
?>
<link rel="stylesheet" href="../style.css" type="text/css">
        <div class="">
            <div class="">
            <table border=1; class="table table-info table-striped">
            <tr>
                <td>Id</td>
                <td>Date</td>
                <td>Name</td>
                <td>Input</td>
                <td>Output</td>
                <td>Total</td>
                <td>Information</td>
                <td>Action</td>
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
                </tr>
                    <?php
                        }
                ?>
            </table>
            </div>
        </div>

        <!-- <section>
        <table class="table mt-4">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
        </section>
</main> -->

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
