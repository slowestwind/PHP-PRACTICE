<!--
# Author: Arvind Sharma
# Description: A Contact Form
# Contact: slowestwind@gmail.com
# source : Traversy Media
 -->

 <!-- php code goes here -->

<?php

 # message get_class_vars
 $msg = '';

 # Check for the Submit
 if(filter_has_var(INPUT_POST, 'submit')){

   // get form data
   $name = htmlspecialchars($_POST['name']);
   $email = htmlspecialchars($_POST['email']);
   $message = htmlspecialchars($_POST['message']);

   // Check required field
   if(!empty($email) && !empty($name) && !empty($message)){

     // validation of Email
     if (filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
       $msg = "Please enter a valid email.";
     } else {

       // process to send owner email.
       $toEmail = "slowestwind@gmail.com";
       $subject = 'Contact Request From'.$name;
       $body = "
          <h2>Contact Request</h2>
          <h4>Name</h4><p>'.$name'</p>
          <h4>Name</h4><p>'.$name'</p>
          <h4>Name</h4><p>'.$name'</p>
       ";

       // Email header
       $header = "MIME-Version: 1.0"."\r\n";
       $header .= "Content-Type:text/html; charset=utf-8"."\r\n";
       $header .= "From:".$name."<".$email.">"."\r\n";


       // mail function to check if the mail is sent or // // NOT
       if (mail($toEmail, $subject, $body, $header)) {
         // code...
         $msg = "Your Email is sent :)";
       } else {
         $msg = "Your Email in not sent";
       }
     }

   } else {
     // Failed
     $msg = "Please fill in All field";
   }


 }
 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Contact Form</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

    <div class="nav-bar">
      <div class="nav-bar container">
          <div class="title">
            <a href="index.php">My Website</a>
          </div>
      </div>
    </div>

    <div class="container">
      <form class="" action="index.php" method="post">

        <!-- Alert message goes here... -->
        <?php if ($msg != ''):?>
          <div class="alert">
            <?php echo $msg ?>
          </div>
        <?php endif; ?>
        <div class="form-group">
          <label>Name</label><br>
          <!-- here php code will retain it's value -->
          <input type="text" name="name" value="<?php echo isset($_POST['name'])? $name : ''; ?>">
        </div>
        <br>
        <div class="form-group">
          <label>Email</label><br>
          <!-- here php code will retain it's value -->
          <input type="text" name="email" value="<?php echo isset($_POST['email'])? $email : ''; ?>">
        </div>
        <br>
        <div class="form-group">
          <label>Message</label>
          <br>
          <!-- here php code will retain it's value -->
          <textarea name="message" rows="8" cols="80"><?php echo isset($_POST['message'])? $message : ''; ?></textarea>
        </div>
        <br>
        <div class="form-group">
          <input type="submit" class="submit-button" name="submit" value="Submit">
        </div>
      </form>
    </div>

  </body>
</html>
