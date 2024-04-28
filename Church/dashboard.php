<!-- This page is the gub for all admin functionality. This page houses the links to each admin page. The link for this page
     will be visible in place of the login button once an admin has signed in.  -->
<!--  Styled by Thomas Doss and Brandon Eacho -->
<?php
session_start();

// Check if user is an admin
function isAdmin() {
    return (isset($_SESSION['user']) && $_SESSION['user']['UserRole'] === 'admin');
}

// Restrict access if user is not an admin
if (!isAdmin()) {
    header('Location: ../Unauthorized.php'); // Redirect to unauthorized page if not admin
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Glory Goodness Church</title>
    <link rel="stylesheet" href="Styles/Dashboard.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">

</head>
<body>
    <div class="main">
        <div class="navbar">
            <?php 
                include('../Header.php');
                include('../Menu.php');
            ?>
        </div>

        <div class="content">
            <h1>Admin Dashboard</h1>
            
        </div>

        <!-- All links -->
        <div class="AdminLinks">
            <br><br>
            <h1>Choose What To Edit:</h1>
            <br><br>
            <li class="menu-item"><a href="AdminDocs/AdminWeeklyActivity.php">Edit Weekly Activity</a></li><br>
            <li class="menu-item"><a href="AdminDocs/editHomePage.php">Edit Home Page</a></li><br>
            <li class="menu-item"><a href="AdminDocs/AddUsers.php">Add and Delete Users</a></li><br>
            <li class="menu-item"><a href="AdminDocs/editStaff.php">Add and Delete Staff</a></li><br>
            <li class="menu-item"><a href="AdminDocs/editHistory.php">Add and Delete History</a></li><br>
            <li class="menu-item"><a href="AdminDocs/testLogin.php">Test Login</a></li><br>
            <br><br>
            <li class="menu-item"><a href="AdminDocs/signout.php">Sign Out</a></li>

            <br><br>
        </div>

        <?php 
            include('../Footer.php');
        ?>
    </div>
</body>
</html>