<!-- php code -->
<?php
  // check if the submit button is press or // NOt
  if (isset($_POST['submit'])) {

    // assign data to variables
    $username = $_POST['name'];

    // set COOKIE
    setcookie('username', $username, time()+3600);

    // redirect to page1
    header('Location: page1.php');

  }
 ?>

<!-- html code -->
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
