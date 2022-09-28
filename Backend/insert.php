<?php
 /*$con = mysqli_connect("localhost","your_localhost_database_user","
 your_localhost_database_password","your_localhost_database_db");*/
// servername => localhost
        // username => root
        // password => empty
        // database name => db_contact
        $conn = mysqli_connect("localhost", "root", "", "db_contact");

  // Check connection
  if($conn === false){
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}
 
    $txtName = $_POST['txtName'];
    $txtEmail = $_POST['txtEmail'];
    $txtPhone = $_POST['txtPhone'];
    $txtMessage = $_POST['txtMessage'];

// database insert SQL code
    $sql = "INSERT INTO `tbl_contact` (`Id`, `fldName`, `fldEmail`, `fldPhone`, `fldMessage`) 
    VALUES ('0', '$txtName', '$txtEmail', '$txtPhone', '$txtMessage');"
     

?> 