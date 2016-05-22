<?php
  include "connection.php";
  $new = $_POST['username'];
  $name = $_POST['name'];
  $surname = $_POST['surname'];
  $id = $_GET['id'];
  $sql = "update users set username='$new', name='$name', surname='$surname' where id='$id'";
  $connection->query($sql);
  header("Location:admin.php");
 ?>
