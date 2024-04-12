<?php
// Get content from form submission
$content = $_POST['content'];

// Write content to text file
$file = fopen("message.txt", "w");
fwrite($file, $content);
fclose($file);

echo "Message updated successfully";
?>
