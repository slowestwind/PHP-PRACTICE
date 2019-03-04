<!-- php code -->
<?php
  session_start();
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
    <h2>PHP Session</h2>
    <h4>Welcome Mr <?php echo $name ?> You're Subscribe with Email <?php echo $email ?></h4>
    <a href="page2.php">Go to Another Page</a>

  </body>
</html>
