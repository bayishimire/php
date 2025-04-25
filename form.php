
<?php
include"database.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body>

    <h2>Register</h2>
    <form action="registration.php" method="post">
        <label>names</label><br>
        <input type="text" name="names" placeholder="First Name" required><br><br>

        <label>email</label><br>
        <input type="email" name="email" placeholder="Email" required><br><br>

        <label>password</label><br>
        <input type="password" name="password" placeholder="Password" required><br><br>

        <input type="submit" name="submit" value="submit">
    </form>

</body>
</html>
