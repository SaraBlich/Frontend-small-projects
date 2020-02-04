<?php
session_start(); //global

if((isset($_SESSION['loged_in'])) && ($_SESSION['loged_in']==true))
{
  header('Location:colony.php');
  exit(); //lets not do the rest of the code in index.php
}
 ?>


<!DOCTYPE html>
<html lang = "eng">
<head>
  <meta charset = "utf-8"/>
  <meta http-equiv = "X-UA-Compatible" content = "IE=edge,chrome = 1"/>
  <title>Colony - browser game </title>
</head>
<body>
  How far will you make it? Collect most important raw materials for your village stock. <br><br>

  <form action = "login_process.php" method = "post">
    Login:<br> <input type = "text" name = "login"/> <br>
    Password: <br> <input type = "password" name = "password"/> <br> <br>
    <input type = "submit" value = "Login"/>
  </form>
  <?php
  if(isset($_SESSION['error']))
  echo $_SESSION['error'];

   ?>
</body>
</html>
