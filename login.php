<?php
session_start();

include_once "config/koneksi.php";

if (isset($_POST['login'])){
  $email = htmlspecialchars(mysql_real_escape_string($con,$_POST['email']));
  $password = htmlspecialchars(mysql_real_escape_string($con,$_POST['password']));

  $sql = "SELECT email , `password` FROM `admin` WHERE email = '$email' AND `password` = MD5('$password')";

  $result = mysqli_query($con,$sql);

  if (mysqli_num_rows($result) >0) 
  { $_SESSION["admin"] = true; echo"
<script>
  alert('Selamat datang broo !!');
  location.href = 'home.php';
</script>
"; }
else{ echo"
<script>
  alert('Akun salah gais !');
</script>
"; } } ?>
<!DOCTYPE html>
<html>

<head>
  <title>LOGIN</title>
  <link rel="stylesheet" type="text/css" href="log.css" />
  <link rel="icon" href="https://scalebranding.com/wp-content/uploads/2020/10/FS-SF-Letter-Monogram-Logo.jpg" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
  <div class="maincontainer">
    <div class="monkeylogin">
      <div class="animcon" id="animcon">
        <img id="hands" src="tangan.png" />
      </div>
      <div class="formcon">
        <form action="" method="post">
          <input type="email" id="mail" name="email" onclick="openeye();" class="tb" placeholder="Email"
            autocomplete="off" />
          <br />
          <br />
          <input type="password" id="pwdbar" onclick="closeye();" name="password" class="tb" placeholder="Password" />
          <br />
          <br />
          <input type="submit" name="login" class="sbutton" value="L O G I N" />
        </form>
      </div>
      <br>
      <a href="register.php">Register</a>
      <footer class="foot"><a style="color: #bababa; text-decoration: none" href="">EPIDEMIC STORE</a></footer>
    </div>
  </div>
  <script type="text/javascript" src="login.js"></script>
</body>

</html> 