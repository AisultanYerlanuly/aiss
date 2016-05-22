<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="about.css">
  <link rel="shortcut icon"  href="ice1.png">
</head>
<body>
  <div class="verh">
    <ul class="left">
      <li><a href="Mytwit1.php"><img src ="ice3.png" style="width:23px; height:23px; margin-bottom:-5px"> Home</a></li>
      <li><a href="about.php">About</a></li>
    </ul>
    <ul class='right'>
        <li><a style="text-decoration: none;color: #368BC1;">Language: English^</a></li>
        <div id="sidebar" >
          <div class="lang">
            <a href="messages.php">Russian</a><br>
            <a href="messages.php">Kazakh</a><br>
            <a href="messages.php">Arabic</a><br>
            <a href="messages.php">Turkish</a>
        </div>
        </div>
    </ul>
  </div>
  <div class="about">
    <h1>About</h1>
    <p>Ice chat is a social network that unites people all over the world and helps them communicate comfortably and promptly. You can message your friends and see what's new in their lives, share photos. Our users join communities, meet new people.
  </div>
  <div class="logo">
    <h1>Main fotos of ice chat</h1>
    <div class="carouselbox">
      <ol class="content">
        <li><img src="1.jpg" alt="1" width="502" height="300"></li>
        <li><img src="3.png" alt="2" width="502" height="300"></li>
        <li><img src="ice1.png" alt="3" width="490" height="290"></li>
        <li><img src="2.png" alt="4" width="502" height="300"></li>
      </ol>
    </div>
    <script>

    carousel = (function(){
      var box = document.querySelector('.carouselbox');
      var a = 0;
      var counter = 0;
      var items = box.querySelectorAll('.content li');
      var current = items[0];
      function navigate(direction) {
        current.classList.remove('current');
        if (direction!=1 || direction!=-1){
          direction = 1;
        }
        if (direction==-1 && counter==0){
          counter = 4;
        }
        if (direction==1 && counter==3){
          counter = -1;
        }
        counter = (counter + direction);
        current = items[counter];
        current.classList.add('current');
      }
      my = setInterval(navigate, 2000)
      navigate(0);
    })();
    </script>
  </div>
  <div class="what">
    <center><h1>What can you do on Ice chat ?</h1></center>
    <p> Find people with whom you've studied, worked or met on vacation.</p>
    <p> Learn more about people around you and make new friends.</p>
    <p> Stay in touch with loved ones.</p>
  </div>
</body>
</html>
