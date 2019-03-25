<!-- php code -->
<?php
  // session_start
  session_start();

  include("session.php");

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Welcome Page</title>
  </head>
  <body>
    <h1>Welcome <?php echo $login_session; ?> </h1>
    <h2>
      <a href="login.php">Sign Out</a>
    </h2>
  </body>
</html>
