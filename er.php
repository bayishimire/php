<?php


include 'db.php'; 
session_start();// Include database connection
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
</head>
<body>
  <h1>Samuel Bayishimile</h1>

  <form action="register.php" method="post">
    <label for="fname">First Name:</label>
    <input type="text" id="fname" name="fname" placeholder="Name" required />

    <br /><br />

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" placeholder="@gmail.com" required />
    

    <br /><br />
    <label > password</label>

    <input type="PASSWORD" placeholder="password" name="password" required> <br><br><br>
    <button type="submit" name="register">Register</button>
  </form>
</body>
</html>
