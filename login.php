<?php
session_start();

if (isset($_SESSION['failedAttempts'])) {
 // if (isset($_SESSION['failedAttempts']) && $_SESSION['failedAttempts'] > 0) {
     echo "<p>
            Invalid credentials entered. 
            Number of failed login attempts: " . $_SESSION['failedAttempts'] .
          "</p>";
  }; 
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Login</title>
  </head>
  <body>

    <h1>Login</h1>

    <form action ="/validate.php" method="post">
      <label for="username">Username</label>
      <br>
      <input type="text" id="username" name ="username">
      <br>
      <label for="password">Password</label>
      <br>
      <input type="password" id='password' name="password">
      <br><br>
      <input type="submit" value= "Submit">
    </form>
  </body>
</html>