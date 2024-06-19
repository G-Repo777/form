<?php
$host = 'localhost'; // or your database host
$db = 'formsdata'; // your database name
$user = 'root'; // your database username
$pass = ''; // your database password

$con = mysqli_connect($host, $user, $pass, $db);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
