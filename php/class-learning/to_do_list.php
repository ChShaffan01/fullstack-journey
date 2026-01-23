<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve form data
    $username = htmlspecialchars($_POST['username']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    // Append data to task.txt
    $file = 'task.txt';
    $data = "Username: $username, Email: $email, Password: $password" . PHP_EOL;

    // Write to the file
    file_put_contents($file, $data, FILE_APPEND);

    echo "Form submitted successfully!";
}
?>