<?php
  include "connection.php";
  $username = $_POST['username'];
  $name = $_POST['name'];
  $surname = $_POST['surname'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $sql = "insert into users values(null,'$username','$name','$surname','$email','$password')";
  if ($connection->query($sql)){
    header("Location:Mytwit1.php");
  }else echo "wrong";
 ?>
