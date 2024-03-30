<?php
session_start();
include('db_connection.php');

function generate_reset_token($email) {
    global $connection_mysql;

    // Generate a random reset token
    $reset_token = bin2hex(random_bytes(32)); // Generate a random 32-byte token

    // Store the reset token in the database
    $query = "INSERT INTO PasswordReset (email, reset_token) VALUES (?, ?)";
    $stmt = $connection_mysql->prepare($query);
    $stmt->bind_param("ss", $email, $reset_token);
    $stmt->execute();

    // Return the generated reset token
    return $reset_token;
}

function send_reset_email($email, $reset_token) {
    $reset_link = "http://www.glorygoodnesschurch.com/Church/reset_password.php?token=$reset_token";
    $to = $email;
    $subject = "Password Reset Request";
    $message = "Please click the link below to reset your password:\n\n$reset_link";
    $headers = "From: info@glorygoodnesschurch.com";

    mail($to, $subject, $message, $headers);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if email is set and not empty
    if (isset($_POST["email"]) && !empty($_POST["email"])) {
        // Generate and store reset token
        $email = $_POST["email"];
        $reset_token = generate_reset_token($email);

        // Send email with reset link
        send_reset_email($email, $reset_token);

        // Redirect to a confirmation page
        header("Location: reset_email_sent.php");
        exit;
    } else {
        $error = "Email is required.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
</head>
<body>
    <h2>Forgot Password</h2>
    <form method="post">
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br>
        <input type="submit" value="Reset Password">
    </form>
    <?php
    if (isset($error)) {
        echo "<p>Error: $error</p>";
    }
    ?>
</body>
</html>