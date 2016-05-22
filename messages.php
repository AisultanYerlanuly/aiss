<!DOCTYPE html>
<html>
<head>
  <title>Диалоги</title>
  <meta charset='utf-8'>
  <link rel="stylesheet" type="text/css" href="mess.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="ajax.js"></script>
</head>
<body>
  <div class="verh">
    <ul class="left">
      <li><a href="profile1.php" style="text-decoration:none;color:#368BC1">My page</a></li>
      <li><a href="friend.php" style="text-decoration:none;color:#368BC1">My friends</a></li>
      <li><a href="messages.php" style="text-decoration:none;color:#368BC1">My messages</a></li>
    </ul>
    <ul class='right'>
      <li><img src ="ice3.png" style="width:25px; height:25px; margin-bottom:-8px; margin-left:-100px;"></li>
      <li><input type="text" placeholder="  Search Friends" class="bord"></li>
      <li><input type="submit" value="Log out" style="background-color:#368BC1; color:#FDFAFD; border-radius:3px; border-color:#368BC1;  height:28px; width:80px;border-style:solid; margin-left:50px"></li>
    </ul>
  </div>
  <div class="chat">
    <div class="mess">
      <img src="olaf.jpg" height="60" height="60" class="img1">
      <img src="2.jpg" height="60" height="60" class="img2">
      <p1>Hi, my name is Aisultan</p1>
      <p2>Hello, my name is Daniyal</p2>
      <hr style="margin-top:410px; color:#C3CBD4;">
    </div>
    <div class="send">
      <input type="text" class="otp">
      <input type="submit" value="отправить" class="se">
    </div>
    <div class="dialogs">
      <div class="in">
        <img src="search2.png" class="search">
        <form action='search.php' method='post' onsubmit='return false'>
          <input type="text" placeholder="Начните вводить имя друга" id="search" name="search">
        </form>
        <img src="clear.gif" class="clear">
        <div id='demo'>

      </div>
    </div>
  </div>
</body>
</html>
