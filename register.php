<?php
// session_start();

include "config/koneksi.php";

if (isset($_POST['register'])){
  $email = htmlspecialchars(mysqli_real_escape_string($con,$_POST['email']));
  $password = htmlspecialchars(mysqli_real_escape_string($con,$_POST['password']));

  $sql = "INSERT INTO `admin`(`email`, `password`) VALUES ('$email',MD5('$password'))";

  $result = mysqli_query($con,$sql);
  $cek = mysqli_affected_rows($con);
  if ($cek > 0) {
    echo"<script>alert('Akun anda sudah didaftarkan !'); location.href='index.php';</script>";
  }else{
    echo"<script>alert('Akun belum terdaftar !');</script>";
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="log.css">
    <link rel="icon" href="https://scalebranding.com/wp-content/uploads/2020/10/FS-SF-Letter-Monogram-Logo.jpg">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div class="maincontainer">
<div class="monkeylogin">
	<div class="animcon" id="animcon">
		<img id="hands" src="tangan.png"/>
	</div>
	<div class="formcon">
	<form action="" method="post">
		<input type="email" id="mail" name="email" onclick="openeye();" class="tb" placeholder="Email" autocomplete="off"/>
		<br/>
		<br/>
		<input type="password" id="pwdbar" onclick="closeye();" name="password" class="tb"placeholder="Password" />
		<br/>
		<br/>
		<input type="submit" name="register" class="sbutton" value="R E G I S T E R"  />
	</form>
	</div>
		<footer class="foot"><a style="color: #bababa; text-decoration: none;" href="">EPIDEMIC STORE</a></footer>
</div>
</div>
<script type="text/javascript" src="login.js"></script>
</body>
</html> 