<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username === "schoolUser" && $password === "password") {
        $_SESSION["authenticated"] = true;
        header("Location: GloryGSchool.html");
        exit();
    } else {
        $error_message = "Invalid username or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Glory Goodness Church</title>
    <link rel="stylesheet" href="LoginSchool.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<p style="text-align:center;">
    <!-- clicking home should bring you to the homepage-TD -->
    <li><a href="../GloryGHome.html"><img src="GGCLogo.png" alt="ChurchLogo" height= "80"></a></li>

    
</p>

<body>
    <div class="loginMain">
        <h2>Login</h2>

	    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <br>

            <label for="username">Username:</label>
            <input type="text" name="username" required><br>

            <br>

            <label for="password">Password:</label>
            <input type="password" name="password" required><br>

            <br>

            <input type="submit" value="Login">
        </form>
    </div>

</body>

</html>