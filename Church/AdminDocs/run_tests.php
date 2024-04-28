<!-- This page determines the output in testLogin.php -->

<?php
header("Content-Type: text/html"); // Set the content type to HTML

$output = array();
exec('python test_login.py', $output);
$fullstring = "";

foreach ($output as $line) {
    $fullstring = $fullstring . $line . "<br>";
}

echo "<div>" . $fullstring . "</div>";  // Wrap each line in a <div> tag
?>