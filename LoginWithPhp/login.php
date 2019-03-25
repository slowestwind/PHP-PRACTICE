<!-- php code -->
<?php
// include config file
  include("config.php");
  // session start
  session_start();
  $error = "";
  if($_SERVER["REQUEST_METHOD"]=="POST") {

    // store the username and password sent from form
    $myusername = mysqli_real_escape_string($db, $_POST['username']);
    $mypassword = mysqli_real_escape_string($db, $_POST['password']);

    // sql querry
    $sql = "SELECT id FROM loginform WHERE username = '$myusername' and passcode = '$mypassword'";
    $result = mysqli_query($db, $sql); // function to send data to DB_DATABASE
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    // $active = $row['active'];

    $count = mysqli_num_rows($result);

    // if result matched $myusername and $mypassword, tabe row must be 1 row
    if($count == 1) {
      // session_register('$myusername');
      $_SESSION['login_user'] = $myusername;
      // send to the page
      header("location: welcome.php");
    } else {
      $error = 'Your Login Name and Password is Invalid';
    }
  }


 ?>

<!-- html document -->
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <!-- meta tages -->
    <meta charset="utf-8">
    <meta name="author" content="slowestwind">
    <meta name="content" content="login page for a any website">

    <!-- links -->
    <link rel="stylesheet" href="master.css">

    <title>Login Page</title>
  </head>

  <body><script id="__bs_script__">//<![CDATA[
//     document.write("<script async src='/browser-sync/browser-sync-client.js?v=2.26.3'><\/script>".replace("HOST", location.hostname));
// //]]></script>

    <!-- navigation -->
    <section class="navigation">
      <div class="navigation-bar">
        <nav>
          <ul>
            <li> <a href="login.php"></a>logo</li>
            <li> <a href="login.php"></a>company_name</li>
            <li> <a href="login.php"></a>HOME</li>
            <li> <a href="index.html"></a>BLOG</li>
            <li> <a href="index.html"></a>CONTACT US</li>
          </ul>
        </nav>
      </div>
    </section>

    <!-- Login content -->
    <section class="login">
      <div class="login-container">
        <form class="login-form" action="login.php" method="post">
          <div class="">
            <?php echo $error;?>
          </div>
          <input type="text" id="Username" name="username" value="Username"><br>
          <input type="password" id="Password" name="password" value="Password"><br>
          <input type="submit" id="Submit" name="submit" value="Submit"><br>
          <div class="text">
                  <a href="forgetPassword.php">Forget Password?</a> <br>
            If you don't have Account? <a href="signup.html">Sign Up</a> Here <br>

          </div>
            </form>
      </div>
    </section>


    <!-- footer -->
    <!-- <footer>
      Copyright &copy; right reserver by slowestwind, 2019
    </footer> -->
  </body>
</html>
