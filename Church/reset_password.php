<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include('db_connection.php');

// Check if the reset token is provided in the URL
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['token'])) {
    $reset_token = $_GET['token'];
    $query = "SELECT u.UserID, u.Email FROM InfoUser u JOIN PasswordReset pr ON u.UserID = pr.UserID WHERE pr.reset_token = ?";
    $stmt = $connection_mysql->prepare($query);
    $stmt->bind_param("s", $reset_token);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();
    } else {
        echo "Invalid or expired reset token.";
        exit;
    }
} elseif ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['token'])) {
    // If the form is submitted, use the token from the form data
    $reset_token = $_POST['token'];
} else {
    // Reset token is missing
    echo "Reset token is missing.";
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $reset_token = $_POST['token'];
    
    // Fetch the user information based on the reset token
    $query = "SELECT u.UserID, u.Email FROM InfoUser u JOIN PasswordReset pr ON u.UserID = pr.UserID WHERE pr.reset_token = ?";
    $stmt = $connection_mysql->prepare($query);
    $stmt->bind_param("s", $reset_token);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();
        
        if ($_POST["password"] === $_POST["confirm_password"]) {
            $password = $_POST["password"];
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);                            
            $update_query = "UPDATE PassUser SET PassKey = ? WHERE UserID = ?";
            $update_stmt = $connection_mysql->prepare($update_query);
            $update_stmt->bind_param("si", $hashed_password, $user['UserID']);
            
            // Execute the update query
            if ($update_stmt->execute()) {
                // Password updated successfully
                $delete_query = "DELETE FROM PasswordReset WHERE reset_token = ?";
                $delete_stmt = $connection_mysql->prepare($delete_query);
                $delete_stmt->bind_param("s", $reset_token);
                
                // Execute the delete query
                if ($delete_stmt->execute()) {
                    // Reset token deleted successfully
                    // Redirect to the login page
                    header("Location: loginChurch.php");
                    exit;
                } else {
                    // Error deleting reset token
                    $error = "Error deleting reset token: " . $connection_mysql->error;
                }
            } else {
                // Error updating password
                $error = "Error updating password: " . $connection_mysql->error;
            }
        } else {
            // Passwords do not match
            $error = "Passwords do not match.";
        }
    } else {
        echo "Invalid or expired reset token.";
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Styles/Dashboard.css">
    <title>Reset Password</title>
</head>
<body>
    <div class="main">
        <?php 
            include('../Header.php');
            include('../Menu.php');
        ?>

        <div class="content">
            <h1>Reset Password</h1>
        </div>

        <div class="AdminLinks">
            <h2>Reset Password</h2><br><br>
            <form method="post">
                <label for="password">New Password:</label><br><br>
                <input type="password" id="password" name="password" required><br><br>
                <label for="confirm_password">Confirm Password:</label><br><br>
                <input type="password" id="confirm_password" name="confirm_password" required><br><br>
                <input type="hidden" name="token" value="<?php echo htmlspecialchars($reset_token); ?>">
                <input type="submit" value="Reset Password">
            </form>

            <br>
            <?php if (isset($error)) echo "<p>Error: $error</p>"; ?>
        </div>

        

        <?php 
            include('../Footer.php');
        ?>
    </div>
</body>
</html>