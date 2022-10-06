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
 
$txtName =  $_REQUEST['txtName'];
$txtEmail = $_REQUEST['txtEmail'];
$txtPhone =  $_REQUEST['txtPhone'];
$txtMessage = $_REQUEST['txtMessage'];
 

// database insert SQL code
    $sql = "INSERT INTO `tbl_contact` 
    VALUES ('$txtName', '$txtEmail', '$txtPhone', '$txtMessage')";


if(mysqli_query($conn, $sql)){
    echo "<h3>data stored in a database successfully."
        . " Please browse your localhost php my admin"
        . " to view the updated data</h3>";

} else{
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
}
 
// Close connection
mysqli_close($conn);

?> 