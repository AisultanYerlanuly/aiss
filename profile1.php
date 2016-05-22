<!DOCTYPE html>
<html>
<head>
    <title>My page</title>
    <link rel="stylesheet" type="text/css" href="page.css">
    <link rel="shortcut icon"  href="images/ice1.png">
</head>
<body>
  <div class="verh">
    <ul class="left">
      <li><a href="profile1.php" style="text-decoration:none;color:#368BC1">My page</a></li>
      <li><a href="friend.php" style="text-decoration:none;color:#368BC1">My friends</a></li>
      <li><a href="messages.php" style="text-decoration:none;color:#368BC1">My messages</a></li>
    </ul>
    <ul class='right'>
      <li><img src ="images/ice3.png" style="width:25px; height:25px; margin-bottom:-8px; margin-left:-100px;"></li>
      <li><input type="text" placeholder="  Search Friends" class="bord"></li>
      <li><input type="submit" value="Log out" style="background-color:#368BC1; color:#FDFAFD; border-radius:3px; border-color:#368BC1;  height:28px; width:80px;border-style:solid; margin-left:50px"></li>
    </ul>
  </div>
  <div class="qwe">
    <div class="top">
    </div>
    <div style="margin-left:60px">
      <h1 style="margin-left:10px">username</h1>
    </div>
    <ul class="asd">
      <p>Friends 0</p>
      <p>FOLLOWINGS 0</p>
    </ul>
    <div class="ava">
    </div>
  </div>
  <div class="posts">
    <form action="post.php" method="POST" enctype="multipart/form-data">
      <div class="post">
        <img alt="NEA" src="images/ice1.png" class="yaico">
        <textarea name = "posts" placeholder="What's happanig?" class="input"></textarea><br>
        <input type="file" name="photo" value="select">
        <input type = "submit" value = "Post" class="tweet">
      </div>
    </form>
  </div>

    <?php
    include "connection.php";
      session_start();
      $id = $_SESSION['username'];
      $sql = "select * from posts where user='$id'";
      $result = $connection->query($sql);
      $counter = 0;
      while (mysqli_num_rows($result)>$counter){
        $row = $result->fetch_array();
        echo "<div class='posts2' style='padding:7px;'> $row[user] |
               $row[post]</div>";
        $counter++;}
    ?>

</body>
</html>
