<?php
session_start();

// Check if user is logged in
if (isset($_SESSION['user_id'])) {
    // User is already logged in, redirect to landing page
    header('Location: landing.php');
    exit;
}

// Handle login form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Perform login validation (hardcoded credentials for demonstration)
    if ($email === 'user@example.com' && $password === 'password123') {
        // Successful login
        $_SESSION['user_id'] = 1; // Set a user ID
        header('Location: landing.php');
        exit;
    } else {
        $error = 'Invalid email or password.';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Skyroom System</title>
</head>
<body>
    <h1>Login to Skyroom System</h1>
    <?php if (isset($error)) { echo '<p style="color:red;">' . $error . '</p>'; } ?>
    <form action="" method="POST">
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>