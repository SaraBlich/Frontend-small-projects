<?php

session_start(); //global

if((!isset($_POST['login'])) || (!isset($_POST['password'])))
{
  header('Location:index.pxp');
  exit();
}

require_once "connect.php";

$connect = @new mysqli($host, $db_user, $db_password, $db_name);

if($connect -> connect_errno != 0)
{
  echo "Error:".$connect->connect_errno;
}

else
{
  $login = $_POST['login'];
  $password = $_POST['password'];

  $login = htmlentities($login, ENT_QUOTES, "UTF-8"); // change to entities
  $password = htmlentities($password, ENT_QUOTES, "UTF-8");

  $sql = ;

  if($result = @$connect-> query(sprintf("SELECT * FROM users WHERE user = '%s' AND pass = '%s'", mysqli_real_escape_string($connect, $login),
  mysqli_real_escape_string($connect, $password))))

  if($result = @$connect->query($sql))
  {
    $howmanyUsers = $result->num_rows;
    if($howmanyUsers>0)
    {
      $_SESSION['loged_in'] = true;
      $row = $result->fetch_assoc();
      $_SESSION['id'] = $row['id'];
      $_SESSION['user'] = $row['user']; //global user
      $_SESSION['wood'] = $row['wood'];
      $_SESSION['stone'] = $row['stone'];
      $_SESSION['grain'] = $row['grain'];
      $_SESSION['dayspremium'] = $row['dayspremium'];

      unset($_SESSION['error']);

      $result->close();
      header('Location:colony.php');


    }
    else
    {
      $_SESSION['error'] = "<span style = 'color:red;'> Error occured!</span>";
      header('Location:index.php');
    }
  }


  $connect->close();
}



 ?>
