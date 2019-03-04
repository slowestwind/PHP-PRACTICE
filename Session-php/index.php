<!--
Author: Arvind Sharma
Description: Here we demonstrate how to retain data from one page
              to other using server
Learning Source : Traversy Media

  -->

<!-- PHP code  -->
<?php
  if (isset($_POST['submit'])) {
    // code...
    session_start();  // Start the session_start

    // Assingning session variable with secure htmlentities for name
    $_SESSION['name'] = htmlentities($_POST['name']);

    // Assingning session variable with secure htmlentities for email
    $_SESSION['email'] = htmlentities($_POST['email']);

    // it will redirect to page1.php with stored data
    header('Location: page1.php');

    # unset function to unset value
    // unset($_SESSION['name'])


    # to Destroy the session
    // session_destroy();

  }

 ?>


<!-- Html document start here -->
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <!-- form -->
    <form class="form-class" action="index.php" method="post">
      <label>Name</label><br>
      <input type="text" name="name" value=""><br>

      <label>Email</label><br>
      <input type="text" name="email" value=""><br>

      <input type="submit" name="submit" value="Submit">

    </form>
  </body>
</html>
