<?php
include 'database.php'; // include the fixed connection file db.php

if (isset($_POST["submit"])) { // registration form is submitted
    $email = $_POST['email'];
    $names = $_POST['names'];
    $password = $_POST['password'];

    // You should hash the password for security!
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Check if the email and name already exist in the database
    $chek_qery = "SELECT * FROM data_form WHERE email='$email' AND names='$names'";
    $result = mysqli_query($conn, $chek_qery);

    if (mysqli_num_rows($result) > 0) {
        echo "Email and name already exist in the database. Please log in!";
        echo '<input type="button" value="Login" onclick="window.location.href=\'login.php\'">';
        exit;
    }

    // Insert the new user into the database
    $insert = "INSERT INTO data_form (names, email, password) VALUES ('$names', '$email', '$hashed_password')";
    $res = mysqli_query($conn, $insert);

    if ($res) {
        echo "Registered successfully!" ;
    } else {
        echo "Failed to register: " . mysqli_error($conn);
    }
}
?>
