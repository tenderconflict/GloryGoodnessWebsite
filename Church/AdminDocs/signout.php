<!-- This page allows a user to sign out -->
<!-- All lines written by Brandon Eacho -->
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    
    <title>Signout</title>
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
            <h1>Sign Out</h1>
        </div>

        <!-- Gives user an option to sign out if currently logged in or 
             takes them to the login page if they are not currently logged in -->
        <div class="AddInfo">
            <br><br><br><br>
                <?php if (isset($_SESSION['user'])): ?>
                    <li class="menu-item"><a href="signoutCode.php">Log Out</a></li>
				<?php else: ?>
        			<li class="menu-item"><a href="../loginChurch.php">Log In</a></li>
                <?php endif; ?>
        </div>

        <?php 
            include('../../Footer.php');
        ?>
    </div>
</body>

</html>