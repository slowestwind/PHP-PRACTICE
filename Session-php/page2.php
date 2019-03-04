<!-- php code -->
<?php

  // This wil start the session
  session_start();

  # if you want to change(update) data through page1
  # then you shoud assign like $this->
  $_SESSION['name'] = "Suraj Singh";

  // Assingning the variable with stored data
  $name = $_SESSION['name'];
  $email = $_SESSION['email'];


 ?>

<!-- html code -->
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2>PHP SESSION</h2>
    <h4>hello <?php echo $name; ?></h4>

  </body>
</html>
