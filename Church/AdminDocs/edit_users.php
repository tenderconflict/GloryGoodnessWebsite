<!-- All lines written by Brandon Eacho -->
<?php

include('../db_connection.php');

if(isset($_GET['id'])) {
    $userId = $_GET['id'];

    // Fetch user information from the database
    $sql = "SELECT * FROM InfoUser WHERE UserID = ?";
    $stmt = $connection_mysql->prepare($sql);
    $stmt->bind_param("i", $userId);
    $stmt->execute();
    $result = $stmt->get_result();

    if($result->num_rows === 1) {
        $user = $result->fetch_assoc();
    } else {
        echo "User not found.";
        exit();
    }
} else {
    echo "User ID not provided.";
    exit();
}

// If form is submitted, update user information
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update_user'])) {
    $newFirstName = $_POST['new_first_name'];
    $newLastName = $_POST['new_last_name'];
    $newEmail = $_POST['new_email'];
    $newPhone = $_POST['new_phone'];
    $newUserRole = $_POST['new_user_role'];

    // Update user information in the database
    $updateSql = "UPDATE InfoUser SET FirstName = ?, LastName = ?, Email = ?, Phone = ?, UserRole = ? WHERE UserID = ?";
    $stmt = $connection_mysql->prepare($updateSql);
    $stmt->bind_param("sssssi", $newFirstName, $newLastName, $newEmail, $newPhone, $newUserRole, $userId);
    $stmt->execute();

    header("Location: edit_users.php?id={$userId}");
    exit();
}
?>

<!-- Lines 1-147 written by Thomas -->
<!DOCTYPE html>
<html lang="en">

<head>
    
    <title>Glory Goodness Church</title>
    <link rel="stylesheet" href="../Styles/Dashboard.css">
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
            <h1>Edit User</h1>
        </div>

        <div class="AddInfo">
            <br>
            <h2>Edit User: <?php echo $user['FirstName'] . " " . $user['LastName']; ?></h2><br><br><br>

            <div class="centered-form">
                <div class="form-container">
                    <form method="post">
                        <label for="new_first_name">First Name:</label>
                        <input type="text" name="new_first_name" value="<?php echo $user['FirstName']; ?>" required><br><br>
                        <label for="new_last_name">Last Name:</label>
                        <input type="text" name="new_last_name" value="<?php echo $user['LastName']; ?>" required><br><br>
                        <label for="new_email">Email:</label>
                        <input type="email" name="new_email" value="<?php echo $user['Email']; ?>" required><br><br>
                        <label for="new_phone">Phone:</label>
                        <input type="text" name="new_phone" value="<?php echo $user['Phone']; ?>" required><br><br>
                        <label for="new_user_role">User Role:</label>
                        <select name="new_user_role" required>
                            <option value="admin" <?php if($user['UserRole'] == 'admin') echo 'selected'; ?>>Administrator</option>
                            <option value="student" <?php if($user['UserRole'] == 'student') echo 'selected'; ?>>Student</option>
                        </select><br><br>
                        <button type="submit" name="update_user">Update User</button>
                    </form>
                </div>
            </div>
            <br><br>
        </div>
        <?php 
            include('../../Footer.php');
        ?>
    </div>
</body>

</html>