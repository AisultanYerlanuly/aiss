<html>
<head>
  <title>ice_chat</title>
  <meta charset='utf-8'>
  <link rel="stylesheet" type="text/css" href="ice.css">
  <link rel="shortcut icon"  href="ice1.png">
</head>
<body>
  <div class="verh">
    <ul class="left">
      <li><a href="Mytwit.html"><img src ="ice3.png" style="width:23px; height:23px; margin-bottom:-5px"> Главная</a></li>
      <li><a href="about.html">О сайте</a></li>
    </ul>
    <ul class='right'>
        <li><a style="text-decoration: none;color: #368BC1;">Язык: Русский^</a></li>
        <div id="sidebar" >
          <div class="lang">
            <a href="Mytwit1.html">Английский</a><br>
            <a href="messages.html">Казахский</a><br>
            <a href="messages.html">Арабский</a><br>
            <a href="messages.html">Турецкий</a>
        </div>
        </div>
    </ul>
  </div>
  <form action="/singin" method="POST">
    <div class="regist">
      <input type="text" name="username" id="username" placeholder="Имя пользователя"><br>
      <input type="password" name="password" id="password" placeholder="Пароль" style="width:150px">
      <input type="submit" value="Войти" style="background-color:#0066FF; color:white; border-radius:5px; border-color:#3366FF;height:28px; width:80px;border-style:solid">
    </div>
  </form>
  <form action="/signup" method="POST">
    <div class="signup">
      <div style="font-size:13 px">
        <p1 style="color:#101010">Новый в Айс чат?</p1>
        <p2 style="color:#505050">Зарегистрироваться</p2>
      </div>
      <hr style="width:258px; margin-left:-11px; border:none; height:1px; background-color:#BDBBB7; color:#BDBBB7">
      <input type="text" name="username" id="username" placeholder="Имя пользователя" style="margin-bottom:5px"><br>
      <input type="email" name="email" id="email" placeholder="Электронная почта" style="margin-bottom:5px"><br>
      <input type="password" name="password" id="password" placeholder="Пароль" style="margin-bottom:5px"><br>
      <input class="sign" type="submit" value="Зарегистрироваться" style="margin-left:10pxs">
    </div>
  </form>
  <div class="slova">
    <h1>Добро пожаловать в Айс чат!</h1>
    <p>Будьте на связи с друзьями и другими замечательными людьми. Получайте последние новости о том, что вас интересует. И следите за событиями в реальном времени, с разных сторон.</p>
  </div>
</body>
</html>
