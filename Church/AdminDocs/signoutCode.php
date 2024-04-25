<!-- All lines written by Brandon Eacho -->
<?php
session_start();

$_SESSION = [];

session_destroy();

header("Location: ../loginChurch.php");
exit();
?>