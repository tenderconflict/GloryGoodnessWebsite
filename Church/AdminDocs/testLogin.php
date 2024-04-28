<!-- This page tests the security measures of the login system. A text form is used to recieve login and password values to test
     the security of the login system. -->
<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Test</title>
    <link rel="stylesheet" href="../../Church/Styles/Dashboard.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
</head>
<body>
    <div class="navbar">
        <?php
        include('../../Header.php');
        include('../../Menu.php');
        ?>
    </div>

    <div class="content">
        <h1>Test Login Security</h1>
    </div>

    <div class="AddInfo">
        <br><h1>Login Test</h1><br>

        <!-- Testing form -->
        <div class="centered-form">
            <div class="form-container">
                <form action="process_test_cases.php" method="post">
                    <label for="test_cases">Test Cases (one per line, format: username,password):</label>
                    <textarea id="test_cases" name="test_cases" rows="5"></textarea>                        
                    <br>
                    <button type="submit">Run Tests</button>
                </form>
                <br>
                <div id="result"></div>
            </div>
        </div>

        <!-- Script to write to page  -->
        <script>
            const resultDiv = document.querySelector('#result');

            window.addEventListener('load', async () => {
                const response = await fetch('run_tests.php');
                const result = await response.text();
                resultDiv.innerHTML = result;
            });
        </script>
        <br><br>
    </div>

    <?php
        include('../../Footer.php');
    ?>
</body>
</html>