<?php

require_once "includes/db.php";

$categories = $_POST['categories'];
$established = $_POST['established'];
$teams = $_POST['teams'];


if(!empty($categories) && !empty($established) && !empty($teams)){

  $sql = $conn->prepare("INSERT INTO sports (categories, established, teams) VALUES ( ?, ?, ?)");
  $sql->bind_param("sis", $categories, $established, $teams);
  $sql->execute();
  $sql->close();
  $conn->close();
}else

echo ''

 ?>
