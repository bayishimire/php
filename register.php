<?php
include 'db.php'; // include the fixed connection file db.php

if (isset($_POST["register"]))// registration form is submitted{
    $email = $_POST['email'];
    $fname = $_POST['fname'];
    $password = $_POST['password'];

    // You should hash the password for security!
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    // BAYISHIMIRE IS FILE NAME OF DATABASE

    $insert = "INSERT INTO bayishimire (fname, email, password) VALUES ('$fname', '$email', '$hashed_password')";
    $res = mysqli_query($conn, $insert);

    if ($res) {
        echo "Registered successfully!";
    } else {
        echo "Failed to register: " . mysqli_error($conn);
    }
} else {
    echo "Form not submitted";
}
?>
