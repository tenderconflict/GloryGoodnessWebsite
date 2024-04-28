<!-- This page is the code for signing out the user -->
<!-- All lines written by Brandon Eacho -->
<?php
session_start();

$_SESSION = [];

session_destroy();

header("Location: ../loginChurch.php");
exit();
?>