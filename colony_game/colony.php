<?php
session_start();//global
if (!isset($_SESSION['loged_in'])) //if we are not loged in, we are automaticly sent to the loging page (index.php)
{
  header('Location:index.php');
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
  <?php
  echo "<p> Hello, ".$_SESSION['user']."! [<a href = 'logout_process.php'>Log out</a>]";
  echo "<br><br> Let's see what do we have in stock. <br>
  <table class = 'resources' style = 'border:2px solid black;'>
  <tr>
  <td>wood</td> <td>stone</td> <td>grain</td> <td>days premium </td>
  </tr>
  <tr>
  <td>".$_SESSION['wood']."</td><td>".$_SESSION['stone']."</td><td>".$_SESSION['grain']."</td><td>".$_SESSION['dayspremium']."</td>
  </tr>
  </table>"

   ?>
</body>
</html>
