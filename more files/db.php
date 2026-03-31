<?php
$host = "sqlXXX.unaux.com";    // Found in control panel
$user = "your_db_user";
$pass = "your_password";
$db = "your_db_name";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
