<?php

$servername = "localhost";
$username = "root";
$password  = "";
$database = "projekt1";


$conn = new mysqli($servername, $username, $password, $database);

if($conn === false){
  die("Could not connect!" . $conn->connect_error);
}

 ?>
