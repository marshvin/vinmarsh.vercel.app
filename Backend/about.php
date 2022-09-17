<?php
 /*$con = mysqli_connect("localhost","your_localhost_database_user","
 your_localhost_database_password","your_localhost_database_db");*/
 
    $con = mysqli_connect('localhost', 'root', '','db_contact');

    $txtName = $_POST['txtName'];
    $txtEmail = $_POST['txtEmail'];
    $txtPhone = $_POST['txtPhone'];
    $txtMessage = $_POST['txtMessage'];

// database insert SQL code
    $sql = "INSERT INTO `tbl_contact` (`Id`, `fldName`, `fldEmail`, `fldPhone`, `fldMessage`) 
    VALUES ('0', '$txtName', '$txtEmail', '$txtPhone', '$txtMessage');"

// insert in database   
    $rs = mysqli_query($con, $sql);

    /*checking if the code was succesful*/
if($rs)
    {
        echo "Contact Records Inserted";
    }
    

?> 