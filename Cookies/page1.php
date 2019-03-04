<!-- php code -->
<?php
  //setcookie('username', Suraj , time()+86400*30); // for a day

  // to unset the cookie
  // setcookie('username', $username, time()-3600);

  // check if the cookie is set or // // NOt
  if (count($_COOKIE)>0) {
    // code...
    echo 'There are '.count($_COOKIE).' is set <br>';
  } else {
    echo 'There are no cookie. <br>';
  }

  // to check the cookie store or // NOt
  if (isset($_COOKIE['username'])) {
    // code...
    echo 'COOKIE is set with username '.$_COOKIE['username'].' <br>';
  } else {
    echo 'cookie is not set';
  }
 ?>
