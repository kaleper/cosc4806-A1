<?php
session_start();

// If user is not authenticated, redirects to login page
  if (isset($_SESSION['authenticated']) && $_SESSION['authenticated'] != 1) {
        header ('location: /login.php');
        exit;
      }
?>


<!DOCTYPE html>
<html>
  <head>
    <title>Assignment 1</title>
  </head>
  <body>
    
    <h1>Assignment 1</h1>

    
      <p> Welcome, <?=$_SESSION['username'];?> </p>
   
    
  </body>

  <footer>
   
      <p> <a href="/logout.php">Log Out</p>
  
  </footer>
</html>