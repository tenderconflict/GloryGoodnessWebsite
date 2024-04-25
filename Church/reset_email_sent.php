<!-- All lines written by Brandon Eacho -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Styles/Dashboard.css">

    <title>Reset Email Sent</title>
</head>
<body>
    <div class="main">
        <?php 
            include('../Header.php');
            include('../Menu.php');
        ?>

        <div class="content">
            <h1>Email Sent</h1>
        </div>

        <div class="AdminLinks">
            <h2>Reset Email Sent</h2>
            <br><br>
            <p>An email containing instructions to reset your password has been sent to your email address. Please check your inbox (and spam folder) and follow the instructions provided.</p>
        </div>

        <?php 
            include('../Footer.php');
        ?>
    </div>
</body>
</html>