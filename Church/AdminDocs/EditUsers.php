<?php
session_start();

include('../db_connection.php');

// Function to display users
function displayUsers() {
    global $connection_mysql;

    $sql = "SELECT UserID, FirstName, LastName FROM InfoUser";
    $result = mysqli_query($connection_mysql, $sql);

    if ($result->num_rows > 0) {
        echo "<ul>";
        while ($user = $result->fetch_assoc()) {
            echo "<li><a href='edit_users.php?id={$user['UserID']}'>{$user['FirstName']} {$user['LastName']}</a></li>";
            echo "<br><br>";
        }
        echo "</ul>";
    } else {
        echo "No users found.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    
    <title>Glory Goodness Church</title>
    <link rel="stylesheet" href="../Styles/GloryGHomeStyles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">

</head>

<body>
    <div class="main">
        <div class="navbar">
            <?php 
                include('../../Header.php');
                include('../../Menu.php');
            ?>
        </div>


        <div class="content">
            <h1>Edit a User</h1>
        </div>

        <div class="AddUser">
            <h2>Pick a User to Edit:</h2>
            <?php displayUsers(); ?>
        </div>

    </div>
</body>

</html>