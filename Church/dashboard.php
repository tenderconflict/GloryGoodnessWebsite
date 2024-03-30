<?php
session_start();
?>

<!-- Lines 1-147 written by Thomas -->
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
            <h1>Welcome Admin!</h1>
            
        </div>

        <div class="AdminLinks">
            <h2>Choose What To Edit:</h2>
            <br><br>
            <li><a href="AdminDocs/AdminWeeklyActivity.php">Edit Weekly Activity</a></li>
            <li><a href="AdminDocs/AddUsers.php">Add and Delete Users</a></li>
            <li><a href="../GloryGHometest.php">Test</a></li>
            <br>
            <li><a href="AdminDocs/signout.php">Sign Out</a></li>
        </div>

        <?php 
            include('../Footer.php');
        ?>
    </div>
</body>
</html>