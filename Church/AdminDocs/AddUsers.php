<?php

include('../db_connection.php');

function displayUsers() {
    global $connection_mysql;

    $sql = "SELECT i.UserID, i.FirstName, i.LastName, i.Email, i.Phone, p.Username, p.PassKey, i.UserRole 
            FROM InfoUser i 
            JOIN PassUser p ON i.UserID = p.UserID";
    $result = mysqli_query($connection_mysql, $sql);

    if ($result->num_rows > 0) {
        echo "<div class='user-list'>"; // Opening container for users
        echo "<h2>Users: </h2>";
        while ($user = $result->fetch_assoc()) {
            echo "<div class='user'>"; // Opening container for each user
            echo "<p>{$user['FirstName']} {$user['LastName']} - Username: {$user['Username']}, Email: {$user['Email']}, Phone: {$user['Phone']}, Role: {$user['UserRole']} - <a href='?delete={$user['UserID']}'>Delete</a></p>";
            echo "</div>"; // Closing container for each user
        }
        echo "</div>"; // Closing container for users
    } else {
        echo "No users found.";
    }
}


if (isset($_GET['delete'])) {
    $userIdToDelete = $_GET['delete'];

    // Delete user from PassUser table first
    $deletePassSql = "DELETE FROM PassUser WHERE UserID = ?";
    $stmt = $connection_mysql->prepare($deletePassSql);
    $stmt->bind_param("i", $userIdToDelete);
    $stmt->execute();

    // Then delete user from InfoUser table
    $deleteInfoSql = "DELETE FROM InfoUser WHERE UserID = ?";
    $stmt = $connection_mysql->prepare($deleteInfoSql);
    $stmt->bind_param("i", $userIdToDelete);
    $stmt->execute();

    header('Location: AddUsers.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_user'])) {
    $newFirstName = $_POST['new_first_name'];
    $newLastName = $_POST['new_last_name'];
    $newEmail = $_POST['new_email'];
    $newPhone = $_POST['new_phone'];
    $newUsername = $_POST['new_username'];
    $newPassword = $_POST['new_password'];
    $newUserRole = $_POST['new_user_role'];

    // Insert into InfoUser table
    $insertInfoSql = "INSERT INTO InfoUser (FirstName, LastName, Email, Phone, UserRole) VALUES (?, ?, ?, ?, ?)";
    $stmt = $connection_mysql->prepare($insertInfoSql);
    $stmt->bind_param("sssss", $newFirstName, $newLastName, $newEmail, $newPhone, $newUserRole);
    $stmt->execute();

    // Get the last inserted UserID
    $lastInsertedUserId = $connection_mysql->insert_id;

    // Hash the passkey
    $hashedPasskey = password_hash($newPassword, PASSWORD_DEFAULT);

    // Insert into PassUser table
    $insertPassSql = "INSERT INTO PassUser (Username, PassKey, UserID) VALUES (?, ?, ?)";
    $stmt = $connection_mysql->prepare($insertPassSql);
    $stmt->bind_param("ssi", $newUsername, $hashedPasskey, $lastInsertedUserId);
    $stmt->execute();

    header('Location: AddUsers.php');
    exit();
}
?>

<!-- Lines 1-147 written by Thomas -->
<!DOCTYPE html>
<html lang="en">

<head>
    
    <title>Glory Goodness Church</title>
    <link rel="stylesheet" href="../../Church/Styles/Dashboard.css">
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
            <h1>Add and Delete Users</h1>
            
        </div>
        <div class="AddInfo">
            <?php displayUsers(); ?>
            <br>

            <h2>Add Users:</h2>

            <form method="post">
                <label for="new_first_name">First Name:</label>
                <input type="text" name="new_first_name" required><br><br>
                <label for="new_last_name">Last Name:</label>
                <input type="text" name="new_last_name" required><br><br>
                <label for="new_email">Email:</label>
                <input type="email" name="new_email" required><br><br>
                <label for="new_phone">Phone:</label>
                <input type="text" name="new_phone" required><br><br>
                <label for="new_username">New Username:</label>
                <input type="text" name="new_username" required><br><br>
                <label for="new_password">New Password:</label>
                <input type="password" name="new_password" required><br><br>
                <label for="new_user_role">User Role:</label>
                <select name="new_user_role" required>
                    <option value="admin">Administrator</option>
                    <option value="student">Student</option>
                </select><br><br>
                <button type="submit" name="add_user">Add User</button>
            </form>

            <br>

            <li><a href="EditUsers.php">Edit Users</a></li>
        </div>

        <?php 
            include('../../Footer.php');
        ?>

    </div>
</body>

</html>