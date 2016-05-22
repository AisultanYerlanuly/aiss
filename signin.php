<?php
  include "connection.php";
  $email = $_POST['email'];
  $password = $_POST['password'];
  $sql = "SELECT * FROM users where email='$email' and password='$password' ";
  if ($result = $connection->query($sql)){
    if(mysqli_num_rows($result)>0){
      $row = $result->fetch_array();
      session_start();
      $_SESSION['id'] = $row['id'];
      $_SESSION['username'] = $row['username'];
      $_SESSION['name'] = $row['name'];
      $_SESSION['surname'] = $row['surname'];
      $_SESSION['email'] = $row['email'];
      header("Location:profile1.php");
    }else echo "invalid email or password";
  }else echo "wrong";
 ?>
