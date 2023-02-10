<?php
    include "../koneksi.php";
    $Id = $_GET ['Id'];
    $edit = $conn->query($conn, "SELECT * FROM tb_class_cash  WHERE id='$Id'");
?>

<form action="" method="post">
<?php

while ($data =mysqli_fetch_array ($edit)) {


?>
<input type="text" name="Id" value="<?php echo $data ['Id']?>"><br>
<input type="text" name="Date" value="<?php echo $data ['Date']?>"><br>
<input type="text" name="Input" value="<?php echo $data ['Input']?>"><br>
<input type="text" name="Output" value="<?php echo $data ['Output']?>"><br>
<input type="text" name="Total" value="<?php echo $data ['Total']?>"><br>
<input type="text" name="Information" value="<?php echo $data ['Information']?>"><br>
<input type="submit" name="edit" value="edit">


<?php
}

if (isset($_POST ['edit'])){
    $Id =$_POST  ['Id'];
    $Date = $_POST ['Date'];
    $Input = $_POST ['Input'];
    $Output = $_POST ['Output'];
    $Total = $_POST ['Total'];
    $Information = $_POST ['Information'];
    $update = $conn->query ($conn, "UPDATE tb_class_cash SET Id='$Id', Date ='$Date', Input='$Input', Output='$Output', Total='$Total', Information='$Information' WHERE no='$no' ");

    if ($update){
        header('location:index.php?page=Buku');
    }
   
}
?>

</form>