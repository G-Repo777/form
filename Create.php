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
