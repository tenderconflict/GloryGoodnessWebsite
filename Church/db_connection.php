<!-- This page connects the website to the database -->
<?php
   session_start();
   $connection_mysql = @mysqli_connect("Localhost", "glorygoo_BrandonEacho", "72004541Be!", "glorygoo_ChurchDatabase"); 
?>