<!-- All lines written by Brandon Eacho -->
<?php
session_start();
include('db_connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST["email"])) {
        $email = $_POST["email"];
        $reset_token = generate_reset_token($email);

        if ($reset_token) {
            send_reset_email($email, $reset_token);
            header("Location: reset_email_sent.php");
            exit;
        } else {
            $error = "Failed to generate reset token.";
        }
    } else {
        $error = "Email is required.";
    }
}

function generate_reset_token($email) {
    global $connection_mysql;

    // Retrieve the UserID associated with the provided email
    $query = "SELECT UserID FROM InfoUser WHERE Email = ?";
    $stmt = $connection_mysql->prepare($query);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();
        $userID = $user['UserID'];

        // Generate a random reset token
        $reset_token = bin2hex(random_bytes(32)); // Generate a random 32-byte token

        // Store the reset token in the database along with the UserID
        $insert_query = "INSERT INTO PasswordReset (UserID, email, reset_token) VALUES (?, ?, ?)";
        $insert_stmt = $connection_mysql->prepare($insert_query);
        $insert_stmt->bind_param("sss", $userID, $email, $reset_token);
        $insert_stmt->execute();

        // Return the generated reset token
        return $reset_token;
    } else {
        return false; // User with the provided email does not exist
    }
}

function send_reset_email($email, $reset_token) {
    $reset_link = "http://www.glorygoodnesschurch.com/Church/reset_password.php?token=$reset_token";
    $to = $email;
    $subject = "Password Reset Request";
    $message = "Please click the link below to reset your password:\n\n$reset_link";
    $headers = "From: info@glorygoodnesschurch.com";
    mail($to, $subject, $message, $headers);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="Styles/Dashboard.css">
</head>
<body>
<div class="main">
    <?php 
        include('../Header.php');
        include('../Menu.php');
    ?>

    <div class="content">
        <h1>Forgot Password</h1>
    </div>
    
    <div class="AdminLinks">
        <h2>Forgot Password</h2><br><br>
        <form method="post">
           <label for="email">Email:</label><br><br>
           <input type="email" id="email" name="email" required><br><br>
           <input type="submit" value="Reset Password">
        </form>
        <?php if (isset($error)) echo "<p>Error: $error</p>"; ?>
    </div>
    <?php 
        include('../Footer.php');
    ?>
</div>
</body>
</html>