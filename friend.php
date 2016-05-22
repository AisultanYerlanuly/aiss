<!DOCTYPE html>
<html>
<head>
    <title>My page</title>
    <meta charset='utf-8'>
    <link rel="stylesheet" type="text/css" href="friend.css">
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
  <div class="dialogs">
    <div class="in">
      <img src="images/search2.png" class="search">
      <input type="text" placeholder="Начните вводить имя друга">
      <img src="images/clear.gif" class="clear">
    </div>
    <div class="drug" id="drug" onclick="ddd()">
        <img src="images/olaf.jpg" height="60" height="60">
        <a href="profile1.php"><h1> Aisultan Yerlanuly</h1></a>
        <a href="messages.php"><p1> Восстановить</p1></a>
        <a href="messages.php"><p> Написать сообщение</p></a>
        <a onclick="myFunction()"><p> Убрать из друзей</p></a>
    </div>
  </div>
  <script>
function myFunction() {
    document.getElementById("drug").innerHTML = "Восстановить";
}
function ddd(){
    if (document.getElementById("drug") == "Восстановить"){
      document.getElementById("drug").innerHTML = 'Приносим свои глубокие извинения, но восстановить друга не получиться';
    }
}
</script>

</body>
</html>
