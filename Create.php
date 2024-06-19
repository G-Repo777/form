<?php
include('dbconnection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Date = $_POST['Date'];
    $Game_Name = $_POST['Game_Name'];
    $Page_Name = $_POST['Page_Name'];
    $Page_Likes = $_POST['Page_Likes'];

    $query = mysqli_query($con, "INSERT INTO data (Date, Game_Name, Page_Name, Page_Likes) VALUES ('$Date', '$Game_Name', '$Page_Name', '$Page_Likes')");
    
    if ($query) {
        echo "<script>alert('Successfully created record');</script>";
    } else {
        echo "<script>alert('Error');</script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook_Game_Data</title>
</head>
<body>
    <div class="bg-darkd-flex justify-content-center aglin-items-center w-100 vh-100">
        <div class="bg-white w-25 rounded">
<form method="post"> 
        <label for="Date">Date:</label>
        <input type="date" id="date" name="Date"><br>

        <label for="Game_Name">Game Name:</label>
        <input type="varchar" id="game_name" name="Game_Name" maxlength="20"><br>

        <label for="Page_Name">Page Name:</label>
        <input type="text" id="page_Name" name="Page_Name" maxlength="20"><br>

        <label for="Page_Likes">Page Likes:</label>
        <input type="number" id="Page_Likes" name="Page_Likes"><br>

        <button class="btn btn-success" type="submit">Create</button>
</body>
</html>