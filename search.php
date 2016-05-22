<?php
  session_start();
  include 'connection.php';
  $search = $_POST['search'];
  if ($search != ""){
    $query = "Select * from users students where username like '%$search%'";
    $result = $connection->query($query);
    if (mysqli_num_rows($result) > 0) {
      $data = $result->fetch_array();
      do{
        echo "<div>".$data['name']." ";
        echo " ".$data['surname']."</div>";
      }
      while($data = mysqli_fetch_array($result));
      }
      else echo "not found";
    }
?>
