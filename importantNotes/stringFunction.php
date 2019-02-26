<?php

  # substr();
  # used for eject some substring
  $name = 'Hello Wold';
  echo substr($name, 1, 3);

  # strlen();
  # used for count no. of char in substring

  echo strlen("hello");

  # strpos();
  # this is will find the position of the string in the given string
  echo strpos("hello", "0" );

  # trim();
  # This function will used to remove whitespace in the substring
  $output = "hello world             ";
  echo strlen($output);

  $trimmed = trim($output);
  echo strlen($output);

  # strtoupper();
  # strtolower();
  # This function will used to change the case of the string lower to upper
  # vise versa
  echo strtoupper('hello world');
  echo strtolower('HELLO WORLD');

  # ucwords();
  # this funtion is used to make each word first letter to uppercase
  echo ucwords('hello everyone... welcome to the php string file');

  # str_replace();
  # this function is used to find and replace each word with the given word in the
  # given function.
  $output = 'This should be removed from the given sentence';
  $output = str_replace('should', 'not should', $output);


  # gzcompress();
  # this function is used to compress the given string
  $output = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
  $compressed = gzcompress($output);
  $original = gzuncompress($compressed);
  echo $original;

  

 ?>
