<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include('db_connection.php');

// Check if the reset token is provided in the URL
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['token'])) {
    $reset_token = $_GET['token'];

    // Prepare and execute a query to retrieve the user information associated with the reset token
    $query = "SELECT u.UserID, u.Email
              FROM InfoUser u 
              JOIN PasswordReset pr ON u.UserID = pr.UserID
              WHERE pr.reset_token = ?";
    $stmt = $connection_mysql->prepare($query);
    $stmt->bind_param("s", $reset_token);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if the query returned exactly one row
    if ($result->num_rows === 1) {
        // Token is valid, retrieve user information
        $user = $result->fetch_assoc();
    } else {
        // Token is invalid or expired, display error message
        echo "Invalid or expired reset token.";
        exit;
    }
} else {
    // Reset token is missing in the URL, display error message
    echo "Reset token is missing.";
    exit;
}

// Handle the form submission to reset the password
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if passwords match
    if ($_POST["password"] === $_POST["confirm_password"]) {
        // Update password in the database
        $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
        $update_query = "UPDATE PassUser SET PassKey = ? WHERE UserID = ?";
        $update_stmt = $connection_mysql->prepare($update_query);
        $update_stmt->bind_param("si", $password, $user['UserID']);
        $update_stmt->execute();

        // Delete reset token from the database
        $delete_query = "DELETE FROM PasswordReset WHERE reset_token = ?";
        $delete_stmt = $connection_mysql->prepare($delete_query);
        $delete_stmt->bind_param("s", $reset_token);
        $delete_stmt->execute();

        // Redirect to login page
        header("Location: login.php");
        exit;
    } else {
        // Passwords do not match, display error message
        $error = "Passwords do not match.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
</head>
<body>
    <h2>Reset Password</h2>
    <form method="post">
        <label for="password">New Password:</label><br>
        <input type="password" id="password" name="password" required><br>
        <label for="confirm_password">Confirm Password:</label><br>
        <input type="password" id="confirm_password" name="confirm_password" required><br>
        <!-- Add a hidden input field to include the reset token in the form submission -->
        <input type="hidden" name="token" value="<?php echo htmlspecialchars($reset_token); ?>">
        <input type="submit" value="Reset Password">
    </form>
    <?php
    // Display error message if there's any
    if (isset($error)) {
        echo "<p>Error: $error</p>";
    }
    ?>
</body>
</html>