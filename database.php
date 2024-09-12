<?php

$hostName = "localhost";
$dbUser = "root";
$dbPassword = "P@55word";
$dbName = "login_register";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
if (!$conn) {
    die("Something went wrong;");
}

?>
