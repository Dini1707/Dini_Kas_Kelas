<?php 
include "../koneksi.php";
include "../header.php";
if (isset ($_POST['add'])) {
    $Date = $_POST['Date'];
    $Name = $_POST['Name'];
    $Input = $_POST['Input'];
    $Information = $_POST['Information'];

    
    $add ="INSERT INTO tb_class_cash (Date, Name ,Input, Information ) VALUES ('$Date', '$Name', '$Input', '$Information')";

    if ($conn->query ($add) === TRUE) {
       
    }
        
    }

?>

<form action=""  method="post"><br>
        <input type="date" name="Date" placeholder="Date"><br>
        <input type="text" name="Name" placeholder="Name"><br>
        <input type="text" name="Input" placeholder="Input"><br>
        <input type="text" name="Information" placeholder="Information"><br>
        <input type="submit" name="add" value="tambahan">
</form>