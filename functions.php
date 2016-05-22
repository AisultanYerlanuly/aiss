<?php
session_start();
	function toUploadImage($id,$url,$userid){
		include "connection.php";

		$query = "INSERT INTO images VALUES($id,'$url	',$userid)";
		mysql_query($query);
	}
	function showImage(){
		$rei = $_SESSION['rei'];
 	if (isset($_POST['show'])) {
		while($arri = mysql_fetch_assoc($rei, MYSQL_ASSOC)){
			foreach ($arri as $value) {
				echo "<img src=$value style='widht:100px; height:100px'></img>";
			}
		}
 	}
}
	function Signup($username, $password, $name){
		include "connection.php";
		$query = "INSERT INTO login (username, password, name) VALUES('$username', '$password', '$name')";
	mysql_query($query);
}

 function login($username, $password){
	 include "connection.php";
	 $sel = "SELECT * FROM login WHERE username='$username' AND password='$password'";
	 $res = mysql_query($sel);
	 $arr = mysql_fetch_assoc($res);
	 $user = $arr['id'];
	 $_SESSION['user']=$user;
	 $image = "SELECT url FROM images WHERE UserId='$user'";
	 $rei = mysql_query($image);
	 $_SESSION['rei']=$rei;
	 if (isset($_POST['login'])){
		 echo $arr['name'];
		 echo "<br>";
		 include "index.php";


	 }
}
?>
