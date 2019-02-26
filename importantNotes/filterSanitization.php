<!-- php code -->
<?php
  // Check for the posted data
  // if (filter_has_var(INPUT_POST, 'name')) {
  //   // code...
  //   echo 'Data Found';
  //
  // } else {
  //   echo 'Data Not Found';
  // }

  // filter the posted Data(email)
  if (filter_has_var(INPUT_POST, 'email')) {
    // to filter email
    $email = $_POST['email'];

    // remove illegal character from Email
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    echo $email;

    // filter the given email
    if (filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)) {
      // code...
      echo 'email is valid';
    }else {
      echo 'email is not valid';
    }
  }

  // These are some filter validate function.
  # FILTER_VALIDATE_EMAIL
  # FILTER_VALIDATE_IP
  # FILTER_VALIDATE_URL
  # FILTER_VALIDATE_FLOAT
  # FILTER_VALIDATE_BOOLEAN
  # FILTER_VALIDATE_INT

  // these are the samitize function
  # FILTER_SANITIZE_EMAIL
  # FILTER_SANITIZE_NUMBER_INT
  # FILTER_SANITIZE_NUMBER_FLOAT
  # FILTER_SANITIZE_SPECIAL_CHARS
  # FILTER_SANITIZE_URL
  # FILTER_SANITIZE_STRING

  // $var = array('arv', 234, '123' );
  // foreach ($var as $value) {
  //   // code...
  //   if (filter_var($value, FILTER_SANITIZE_NUMBER_INT)) {
  //     // code...
  //     echo $value " is a number ";
  //   }
  // }


  $filter = array(
    "name" => FILTER_VALIDATE_STRING,
    "email" => array(
      "filter" => FILTER_VALIDATE_EMAIL,
      "option" => array(
        "min_range" =>1,
        "max_range" => 100
      )
     )
  );

  print_r(filter_input_array(INPUT_POST, $filter));



 ?>


 <!-- html code  -->
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Fiter Sanitization</title>
   </head>
   <body>

     <form class="" action="filterSanitization.php" method="post">
       <label>Name</label>
       <input type="text" name="name">
       <br>
       <label>Email</label>
       <input type="text" name="email">
       <br>
       <input type="submit" name="submit" value="Submit">
     </form>

   </body>
 </html>
