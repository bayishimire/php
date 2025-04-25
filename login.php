<?php
session_start();
include 'database.php'; // Make sure this connects correctly to your DB

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Fetch the user with matching email
    $select = "SELECT * FROM data_form WHERE email = ?";
    $stmt = $conn->prepare($select);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if email exists
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Use password_verify to compare plain password with hash
        if (password_verify($password, $row['password'])) {
            $_SESSION['id'] = $row['id'];
            header('Location: view.php');
            exit();
        } else {
            echo "<p style='color:red;'>❌ Wrong password.</p>";
        }
    } else {
        echo "<p style='color:red;'>❌ Email not found.</p>";
    }

    $stmt->close();
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
</head>
<body>
  <h2>Sign in Form</h2>
  <form action="login.php" method="post">
    <label for="email">Email:</label><br>
    <input type="email" name="email" required><br>

    <label for="password">Password:</label><br>
    <input type="password" name="password" required><br><br>

    <input type="submit" name="login" value="Click to login">
  </form>
</body>
</html>
