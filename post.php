<?php
    include "connection.php";
    session_start();
    $message = $_POST['posts'];
    $user = $_SESSION['username'];
    $sql = "insert into posts values(null,'$user','$message')";
    if ($connection->query($sql)){
      header("Location:profile1.php");
    }else echo "wrong";
  ?>
