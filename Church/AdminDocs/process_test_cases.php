<!-- This page writes the values recieved from testLogin.php to the text file for test_login.py to read from  -->
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['test_cases'])) {
    $test_cases = $_POST['test_cases'];
    $file_path = 'test_cases.txt';

    // Open the file for writing (mode 'w' will overwrite the file)
    $file = fopen($file_path, 'w');

    // Write the test cases to the file
    fwrite($file, $test_cases);

    // Close the file
    fclose($file);
}

// Redirect back to the index page
header('Location: testLogin.php');
exit;
?>