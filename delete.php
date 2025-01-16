<?php
$connection = mysqli_connect("localhost", "root", "", "database");
  $delete = mysqli_query($connection, "DELETE FROM `table` WHERE `id` = {$_GET['id']}"); 
  if($delete)
  {
    header("Location: table.php");

   

  }
?>

