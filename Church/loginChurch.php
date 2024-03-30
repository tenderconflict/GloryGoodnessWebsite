<?php

include('db_connection.php');

// Function to authenticate user
function authenticateUser($username, $password) {
    global $connection_mysql;

    $query = "SELECT i.UserID, p.Username, p.PassKey, i.UserRole
              FROM InfoUser i 
              JOIN PassUser p ON i.UserID = p.UserID
              WHERE Username = ?";
    $stmt = $connection_mysql->prepare($query);
    $stmt->bind_param("s", $username);
    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();
        if(password_verify($password, $user['PassKey'])){
        $_SESSION['user'] = $user;
        return true;
        }
    } else {
        return false;
    }
}

// Function to limit login attempts
function limitLoginAttempts($username) {
    $login_attempts = isset($_SESSION['login_attempts']) ? $_SESSION['login_attempts'] : 0;
    $login_attempts++;
    $_SESSION['login_attempts'] = $login_attempts;

    // Limit login attempts to 5 within 10 minutes
    if ($login_attempts >= 5) {
        $last_login_time = isset($_SESSION['last_login_time']) ? $_SESSION['last_login_time'] : 0;
        if (time() - $last_login_time < 1) { // 10 minutes = 600 seconds
            return true; // Too many login attempts
        } else {
            $_SESSION['login_attempts'] = 0; // Reset login attempts
        }
    }

    $_SESSION['last_login_time'] = time();
    return false;
}

// Check if login form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) {
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    // Check if login attempts limit reached
    if (limitLoginAttempts($username)) {
        $login_error = 'Too many login attempts. Please try again later.';
    } else {
        if (authenticateUser($username, $password)) {
            $role = $_SESSION['user']['UserRole'];
            switch ($role) {
                case 'admin':
                    header('Location: ../GloryGHome.php');
                    exit();
                case 'student':
                    header('Location: student_dashboard.php');
                    exit();
                default:
                    header('Location: ../GloryGHome.php');
                    exit();
            }
        } else {
            $login_error = 'Invalid username or password.';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Glory Goodness Church</title>
    <link rel="stylesheet" href="Styles/LoginChurch.css">
    <script src="LoginSystemChurch.js"></script> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
</head>
<body>
<div class="main">
    <?php
    	include('../Header.php');
    	include('../Menu.php');
  	?>

    <div class="content">
        <h1>Sign In</h1>  
    </div>


    <div class="loginMain">
        <form method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <br><br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <br>
            <br>
            <input type="submit" name="login" value="Log In">
        </form>
        <?php if (isset($login_error)) : ?>
            <p><?= htmlspecialchars($login_error) ?></p>
        <?php endif; ?>
        <p> </p>
        <br>
        <br>
        <p><a href="forgot_password.php">Forgot Password</a></p>
    </div>

    <?php 
        include('../Footer.php');
    ?>
</div>
</body>
</html>