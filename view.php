<?php
session_start();
include 'database.php';

// Check if the user is logged in
if (!isset($_SESSION['email'])) {
    header('Location: login.php');
    exit;
}

// Fetch user data from the database
$user_id = $_SESSION['email'];
$query = "SELECT * FROM data_form WHERE email= '$email'";
$result = mysqli_query($conn, $query);

if ($result && mysqli_num_rows($result) > 0) {
    $user = mysqli_fetch_assoc($result);
    echo "<h1>Welcome, " . htmlspecialchars($user['names']) . "!</h1>";
    echo "<p>Email: " . htmlspecialchars($user['email']) . "</p>";
} else {
    echo "User not found.";
}
?>