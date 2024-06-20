<?php
$host = 'localhost'; // or your database host
$db = 'aitldffa_From'; // your database name
$user = 'aitldffa_NewUser'; // your database username
$pass = 'Newuser2024!'; // your database password

$con = mysqli_connect($host, $user, $pass, $db);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
