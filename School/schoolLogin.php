<?php
error_reporting(E_ALL); ini_set('display_errors', 1);

include('db_connection.php');

function authenticateUser($username, $password) {
    global $connection_mysql;

    $query = "SELECT i.UserID, p.Username, p.PassKey, i.UserRole
              FROM InfoUser i 
              JOIN PassUser p ON i.UserID = p.UserID
              WHERE Username = ? AND PassKey = ?";
    $stmt = $connection_mysql->prepare($query);
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();
        $_SESSION['user'] = $user;
        return true;
    } else {
        return false;
    }
    
    return false;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (authenticateUser($username, $password)) {
        $role = $_SESSION['user']['UserRole'];
        switch ($role) {
            case 'admin':
                header('Location: GloryGSchool.php');
                exit();
            case 'student':
                header('Location: student_dashboard.php');
                exit();
            default:
                header('Location: login.php');
                exit();
        }
    } else {
        $login_error = 'Invalid username or password.';
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Glory Goodness Church</title>
    <link rel="stylesheet" href="Styles/LoginSchool.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<p style="text-align:center;">
    <!-- clicking home should bring you to the homepage-TD -->
    <li><a href="../GloryGHome.html"><img src="GGCLogo.png" alt="ChurchLogo" height= "80"></a></li>

    
</p>

<body>
    <div class="loginMain">
        <h2>User Login</h2>
        <form method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <br>
            <br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <br>
            <input type="submit" name="login" value="Log In">
        </form>

        <?php if (isset($login_error)): ?>
            <p><?php echo $login_error; ?></p>
        <?php endif; ?>  
    </div>

</body>

</html>