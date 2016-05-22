<?php
  include 'connection.php';
  $sql = "select * from users";
  if ($data = $connection->query($sql)){
    $counter = 0;
    echo '<table>';
    while(mysqli_num_rows($data)>$counter){
      $row = $data->fetch_array();
      echo "
              <tr style='border:1px solid black;'>
                <td>$row[id] </td>
                <td>$row[username] </td>
                <td>$row[name] <td>
                <td>$row[surname] <td>
                <td>$row[email] <td>
                <td><a href='del.php?id=$row[id]'>delete</a</td>
                <td><form action='update.php?id=$row[id]' method='post'>
                      <input type='text' name='username' placeholder='username'>
                      <input type='text' name='name' placeholder='name'>
                      <input type='text' name='surname' placeholder='surname'>
                      <input type='submit' value='update'>
                    </form></td>
              </tr>";

      $counter++;
    } echo "</table>";
  }
?>
