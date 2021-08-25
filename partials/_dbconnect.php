<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "idiscuss";

$conn = mysqli_connect($server,$username,$password,$database);

if(!$conn){
    die ("database is not connected".mysqli_connect_error($conn));
}
else{
    // echo "database connected successfully";
}


?>