<?php

  // Initialize session
  session_start();

  // Hardcoded credentials
  $validUsername = "kalen";
  $validPassword = "replit";
  // Initially, user is not authenticated
  $_SESSION['authenticated'] = 0;
  

  // Pulls credentials from login.php form
  $username = $_REQUEST['username']; 
  $_SESSION['username'] = $username;
  $password = $_REQUEST['password'];

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
      echo "Invalid credentials entered. Number of failed login attempts: " . $_SESSION['failedAttempts'];
  }
?>