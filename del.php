<?php
  include "connection.php";
  $id = $_GET['id'];
  $sql = "delete from users where id='$id'";
  $connection->query($sql);
  header("Location:admin.php");
 ?>
