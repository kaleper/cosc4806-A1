<?php

  // Initialize session
  session_start();

  // Hardcoded credentials
  $validUsername = "kalen";
  $validPassword = "replit";

  // Pulls credentials from login.php form
  $username = $_REQUEST['username']; 
  $password = $_REQUEST['password'];

  // Saves username into session variable
  $_SESSION['username'] = $username;

  // Checks if credentials are valid
    if ($validUsername == $username && $validPassword == $password) {
      // Authenticates user and redirects to index.php
      $_SESSION['authenticated'] = 1;
      header ('location: /');
      
    } else {
  // Increments failedAttempts if credentials are invalid
    if (!isset($_SESSION['failedAttempts'])) {
      $_SESSION['failedAttempts'] = 1;
    } else {
      $_SESSION['failedAttempts']++;
    }

      header ('location: /login.php');
  }
?>