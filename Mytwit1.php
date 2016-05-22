<html>
<head>
  <title>ice_chat</title>
  <link rel="stylesheet" type="text/css" href="ice.css">
  <link rel="shortcut icon"  href="images/ice1.png">
</head>
<body>
  <div class="verh">
    <ul class="left">
      <li><a href="Mytwit.php"><img src ="images/ice3.png" style="width:23px; height:23px; margin-bottom:-5px"> Home</a></li>
      <li><a href="about.php">About</a></li>
    </ul>
    <ul class='right'>
        <li><a style="text-decoration: none;color: #368BC1;">Language: English^</a></li>
        <div id="sidebar" >
          <div class="lang">
            <a href="russion.html">Russian</a><br>
            <a href="messages.html">Kazakh</a><br>
            <a href="messages.html">Arabic</a><br>
            <a href="messages.html">Turkish</a>
        </div>
        </div>
    </ul>
  </div>
  <form method="POST" enctype="multipart/form-data" action="signin.php">
    <div class="regist">
      <input type="email" name="email" id="email" placeholder="Email"><br>
      <input type="password" name="password" id="password" placeholder="password" style="width:150px">
      <input type="submit" value="Log in" style="background-color:#0066FF; color:white; border-radius:5px; border-color:#3366FF;height:28px; width:80px;border-style:solid">
    </div>
  </form>
  <form method="POST" enctype="multipart/form-data" action="signup.php" onsubmit="return func(this)">
    <div class="signup">
      <div style="font-size:13 px">
        <p1 style="color:#101010">New to ice_chat?</p1>
        <p2 style="color:#505050">Sign up</p2>
      </div>
      <hr style="width:258px; margin-left:-11px; border:none; height:1px; background-color:#BDBBB7; color:#BDBBB7">
      <input type="text" name="username" id="username" placeholder="Username" style="margin-bottom:5px"><p id="q1"></p><br>
      <input type="text" name="name" id="name" placeholder="name" style="margin-bottom:5px"><p id="q2"></p><br>
      <input type="text" name="surname" id="surname" placeholder="surname" style="margin-bottom:5px"><p id="q3"></p><br>
      <input type="email" name="email" id="email" placeholder="Email" style="margin-bottom:5px"><p id="q5"></p><br>
      <input type="password" name="password" id="password" placeholder="Password" style="margin-bottom:5px"><p id="q4"><br>
      <input class="sign" type="submit" value="Sign up for Ice_chat" style="margin-left:10pxs">
    </div>
  </form>
  <div class="slova">
    <h1>Welcome to ice_chat!</h1>
    <p>Connect with your friends - and other fascinating people. Get in-the-moment updates on the things that interest you. And watch events unfold, in real time, from every angle.</p>
  </div>
</body>

<script>
  function func(form){
    if(form.username.value == ""){
      form.username.style.border = "red solid 3px";
      document.getElementById("q1").innerHTML = "Username is empty!";
      form.username.focus();
      return false;
    }
    form.username.style.border = "1px black ";
    document.getElementById("q1").innerHTML = "";
    if(form.name.value == ""){
      form.name.style.border = "red solid 3px";
      document.getElementById("q2").innerHTML = "Name is empty!";
      form.username.focus();
      return false;
    }
    form.name.style.border = "0";
    document.getElementById("q2").innerHTML = "";
    if(form.surname.value == ""){
      form.surname.style.border = "red solid 3px";
      document.getElementById("q3").innerHTML = "Surname is empty!";
      form.username.focus();
      return false;
    }
    form.surname.style.border = "0";
    document.getElementById("q3").innerHTML = "";
    if(form.email.value == ""){
      form.email.style.border = "red solid 3px";
      document.getElementById("q5").innerHTML = "Email is empty!";
      form.email.focus();
      return false;
    }
    form.email.style.border = "0";
    document.getElementById("q5").innerHTML = "";
    if(form.password.value == ""){
      form.password.style.border = "red solid 3px";
      document.getElementById("q4").innerHTML = "Password is empty!";
      form.password.focus();
      return false;
    }
    form.password.style.border = "0";
    document.getElementById("q4").innerHTML = "";
    return true;
  }
</script>
</html>
