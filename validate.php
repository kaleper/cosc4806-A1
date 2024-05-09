<?php

  $valid_username = "kalen";
  $valid_password = "replit";

  $username = $_REQUEST['username'];
  $password = $_REQUEST['password'];

    if ($valid_username == $username && $valid_password == $password) {
      echo "Welcome, " . $username . "!";
    } else {
      echo "Invalid credentials. Double check your username and password.";
    }
?>