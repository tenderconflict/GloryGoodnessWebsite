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
                header('Location: ../GloryGHome.php');
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

<!-- Lines 1-69 written by Thomas -->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Glory Goodness Church</title>
    <link rel="stylesheet" href="Styles/LoginChurch.css">
    <script src="LoginSystemChurch.js"></script> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">

</head>
<!-- makes it so logo's in the top left and login is in the top right-TD -->

<p style="text-align:center;">
    <!-- clicking home should bring you to the homepage-TD -->
    <li><a href="../GloryGHome.php"><img src="Pictures/GGCLogo.png" alt="ChurchLogo" height= "80"></a></li>

    
</p>

<body>
    <div class="loginMain">

      


        <h2>Sign in</h2>
        &nbsp; 

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
        <p> </p>
        &nbsp; 
        <p><a href="RegisterChurch.html">Register for an Account Here</a></p>
      </div>
       <!-- links to the login script giving it actual functionality-->
      <script src="LoginSystemChurch.js"></script>



      

    <!--  <script>
        function submitForm() {
            
            return true;
        }
    </script>-->

    </div>

</body>