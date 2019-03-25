<?php
  // include config file for connect to the database
  include('config.php');

  // start session
  // session_start();
  // check for the session user
  $user_check = $_SESSION['login_user'];
  // sending data to the database for the match
  $ses_sql = mysqli_query($db, "SELECT username FROM loginform WHERE username = '$user_check'");
  $row = mysqli_fetch_array($ses_sql, MYSQLI_ASSOC);

  //set the login session for the active user
  $login_session = $row['username'];

  // if the current user's session is not active than send him to the login page
  if(!(isset($_SESSION['login_user']))){
    header("location: login.php");
    die();
  }

 ?>
