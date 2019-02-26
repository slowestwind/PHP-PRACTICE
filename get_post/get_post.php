<!--
  Author: Arvind Sharma

 -->

 <!-- php code goes here -->
 <?php



 // this is for get method which is not secure since information can be guess
 // throuth the url of the because get method use url to send data

  if (isset($_GET['name'])) {
    // print_r($_GET);
    $name=htmlentities($_GET['name']);
    echo $name;
  }

/*
// This is for post method which is more secure than get method because data is
// not send through url.
  if (isset($_POST['name'])) {
    // code...
    $name = htmlentities($_POST['name']);
     print_r($name);
    // echo $name;

  }

  */

    // full info with key and value can be seen by
    echo $_SERVER['QUERY_STRING'];
  ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>GET | POST</title>
  </head>
  <body>
    <!-- get user data -->
    <form class="main-form" action="get_post.php" method="GET">
      <label>Name</label>
      <input type="text" name="name" value="Enter Name">
      <label>Email</label>
      <input type="text" name="email" value="Enter Email">
      <input type="submit" name="submit" value="Submit">
    </form>

    <ul>
      <li>
        <a href="get_post.php?name=Arvind">Arvind</a>
      </li>
      <li>
        <a href="get_post.php?name=Suraj">Suraj</a>
      </li>
      <?php echo "{$name}'s Profile"; ?>
    </ul>

  </body>
</html>
