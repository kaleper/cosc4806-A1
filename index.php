<?php
session_start();

// If user is not authenticated, redirects to login page
  if ($_SESSION['authenticated'] != 1) {
    header ('location: /login.php');
  }; 
?>


<!DOCTYPE html>
<html>
  <head>
    <title>Assignment 1</title>
  </head>
  <body>
    
    <h1>Assignment 1</h1>

    <p><a href="/login.php">Login</a></p>
    <p> Welcome, <?=$_SESSION['username'];?> </p>
  </body>
</html>