<!-- This page allows admin to add and delete users from the system. -->
<!-- All lines written by Brandon Eacho -->
<?php

include('../db_connection.php');

// Displays users to delete
function displayUsers() {
    global $connection_mysql;

    $sql = "SELECT i.UserID, i.FirstName, i.LastName, i.Email, i.Phone, p.Username, p.PassKey, i.UserRole 
            FROM InfoUser i 
            JOIN PassUser p ON i.UserID = p.UserID";
    $result = $connection_mysql->query($sql);

    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Username</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Action</th>
              </tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["FirstName"] . "</td>
                    <td>" . $row["LastName"] . "</td>
                    <td>" . $row["Username"] . "</td>
                    <td>" . $row["Email"] . "</td>
                    <td>" . $row["Phone"] . "</td>
                    <td>
                        <form method='post' action='" . $_SERVER['PHP_SELF'] . "' style='display: inline;'>
                            <input type='hidden' name='userId' value='" . $row["UserID"] . "'>
                            <input type='submit' name='delete' value='Delete'>
                        </form>
                    </td>
                </tr>";
        }

        echo "</table>";
    } else {
        echo "No history found.";
    }
}

//Adds users to the database
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

// Delete users
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["delete"])) {
    $userId = $_POST["userId"];

    $sql = "DELETE FROM PassUser WHERE UserID = $userId";

    if (mysqli_query($connection_mysql, $sql)) {
        echo "History deleted successfully.";
    } else {
        echo "Error deleting history: " . mysqli_error($connection_mysql);
    }

    $sql = "DELETE FROM InfoUser WHERE UserID = $userId";

    if (mysqli_query($connection_mysql, $sql)) {
        echo "History deleted successfully.";
    } else {
        echo "Error deleting history: " . mysqli_error($connection_mysql);
    }
}
?>

<!-- Lines 1-147 written by Thomas -->
<!DOCTYPE html>
<html lang="en">

<head>
    
    <title>Add Users</title>
    <link rel="stylesheet" href="../../Church/Styles/Dashboard.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <style>
        .centered-table {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        table {
            border-collapse: collapse;
            width: 60%;
            margin-bottom: 20px;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 2px solid black;
            border-top: 2px solid black;
            border-left: 2px solid black;
            border-right: 2px solid black;
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: grey;
        }

        .content {
            padding: 20px;
        }

        .AddInfo {
            padding: 20px;
        }
    </style>
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
            <br>
            <h1>Add Users:</h1><br>

            <!-- Form recieving information on new users -->
            <div class="centered-form">
                <div class="form-container">
                    <form method="post">
                        <label for="new_first_name">First Name:</label>
                        <input type="text" name="new_first_name" required><br>
                        <label for="new_last_name">Last Name:</label>
                        <input type="text" name="new_last_name" required><br>
                        <label for="new_email">Email:</label>
                        <input type="email" name="new_email" required><br>
                        <label for="new_phone">Phone:</label>
                        <input type="text" name="new_phone" required><br>
                        <label for="new_username">New Username:</label>
                        <input type="text" name="new_username" required><br>
                        <label for="new_password">New Password:</label>
                        <input type="password" name="new_password" required><br>
                        <label for="new_user_role">User Role:</label>
                        <select name="new_user_role" required>
                            <option value="admin">Administrator</option>
                            <option value="student">Student</option>
                        </select><br>
                        <button type="submit" name="add_user">Add User</button>
                    </form>
                </div>
            </div>

            <br><br>

            <!-- Displays current users -->
            <h1>Current Users</h1><br>
            <div class="centered-table">
                <?php displayUsers(); ?>
            </div>
            
            <br><br>

            <br>

            <li class="menu-item"><a href="EditUsers.php">Edit Users</a></li>
            <br>
            
        </div>

        <?php 
            include('../../Footer.php');
        ?>

    </div>
</body>

</html>