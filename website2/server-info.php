<?php
  // $_SERVER SUPERGLOBLE

  // Create server array
  $server = [
    'host server name' => $_SERVER['SERVER_NAME'],
    'host header' => $_SERVER['HTTP_HOST'],
    'server software' => $_SERVER['SERVER_SOFTWARE'],
    'document root' => $_SERVER['DOCUMENT_ROOT'],
    'current page' => $_SERVER['PHP_SELF'],
    'absolute path' => $_SERVER['SCRIPT_FILENAME']
  ];

  // echo $server['host server name'];
  // print_r($server);


  // Create client array
  $client = [
    'client system info' => $_SERVER['HTTP_USER_AGENT'],
    'client ip' => $_SERVER['REMOTE_ADDR'],
    'remote port' => $_SERVER['REMOTE_PORT']
  ];

  print_r($client);
 ?>
